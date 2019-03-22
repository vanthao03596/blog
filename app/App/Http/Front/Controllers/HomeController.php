<?php

namespace App\Http\Front\Controllers;

use Domain\Article\Models\Article;

class HomeController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::query()
            ->published()
            ->withTranslation()
            ->orderBy('publish_date', 'desc')
            ->orderBy('id', 'desc')
            ->simplePaginate(10);
        return view('welcome', compact('articles'));
    }
}
