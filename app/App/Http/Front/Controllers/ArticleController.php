<?php


namespace App\Http\Front\Controllers;


use Domain\Article\Models\Article;

class ArticleController
{
    public function show(Article $article)
    {
        return view('single', compact('article'));
    }
}
