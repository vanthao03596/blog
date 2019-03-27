<?php

namespace Support\Services;

use Domain\Article\Models\Article;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Storage;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Spatie\Crawler\CrawlObserver;
use Symfony\Component\DomCrawler\Crawler;

class BlogCrawler extends CrawlObserver
{
    /**
     * Called when the crawler has crawled the given url successfully.
     *
     * @param \Psr\Http\Message\UriInterface $url
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param \Psr\Http\Message\UriInterface|null $foundOnUrl
     */
    public function crawled(UriInterface $url, ResponseInterface $response, ?UriInterface $foundOnUrl = null): void
    {
        $client = new Client();
        $response = (string) $response->getBody();
        $crawler = new Crawler($response);
        $crawler->filter('section.blog-post.hentry.index-post.shadow-sm.pr-lg-3')->each(function (Crawler $dom, $index) use ($client): void {
            $title = $dom->filter('h2.post-title')->text();
            $imageLink = $dom->filter('img.post-thumb.img-fluid.lazy')->attr('data-src');
            $link = $dom->filter('a.post-image-link')->attr('href');
            if (strpos($imageLink, 'chungnguyen.xyz') == 0) {
                $imageLink = 'https://chungnguyen.xyz' . $imageLink;
            }
            $rs = $client->request('GET', (string) $link);
            $rs = (string) $rs->getBody();
            $crawler = new Crawler($rs);
            $crawler->filter('section.post-body.post-content div.text-left a[href="#main"]')
            ->each(function (Crawler $crawler) {
                $node = $crawler->getNode(0);
                $node->parentNode->removeChild($node);
            });
            var_dump('crawling');

            $content = $crawler->filter('section.post-body.post-content div.text-left')->html();

            $image = file_get_contents($imageLink);
            $imageName = time() . '.png';
            $imageUrl = 'public/' . $imageName;
            Storage::disk('media')->put($imageUrl, $image);
            $data = [
                'name' => $title,
                'image_url' => $imageName,
                'content' => $content,
            ];
            $article = new Article();
            $article->name = $data['name'];
            $article->image_url = $data['image_url'];
            $article->content = $data['content'];
            $article->publish_date = now();
            $article->published = true;
            $article->save();
        });
    }

    /**
     * Called when the crawler had a problem crawling the given url.
     *
     * @param \Psr\Http\Message\UriInterface $url
     * @param \GuzzleHttp\Exception\RequestException $requestException
     * @param \Psr\Http\Message\UriInterface|null $foundOnUrl
     */
    public function crawlFailed(UriInterface $url, RequestException $requestException, ?UriInterface $foundOnUrl = null): void
    {
        // TODO: Implement crawlFailed() method.
    }
}
