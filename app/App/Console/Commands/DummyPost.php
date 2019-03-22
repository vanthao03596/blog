<?php

namespace App\Console\Commands;

use Domain\Article\Models\Article;
use Illuminate\Console\Command;

class DummyPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:dummy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        app()->setLocale('en');
        $post1 = new Article();
        $post1->name = 'My Awesome Post';
        $post1->content = 'This is some cool paragraph';
        $post1->published = true;
        $post1->publish_date = now();
        $post1->save();
        $post2 = new Article();
        $post2->name = 'The Second Amazing Subject';
        $post2->content = 'A very nice text about how things work somewhere';
        $post2->published = true;
        $post2->publish_date = now();
        $post2->save();

        app()->setLocale('vi');
        $post1->name = 'Bài viết của tôi';
        $post1->content = 'Đây là nội dung bài viết của tôi';
        $post1->save();
        $post2->name = 'Bài viết của tôi 2';
        $post2->content = 'Nội dung bài viết 2';
        $post2->save();
    }
}
