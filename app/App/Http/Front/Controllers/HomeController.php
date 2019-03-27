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
        $articles = Article::latest()->get();
        return view('home', compact('articles'));
    }
}
