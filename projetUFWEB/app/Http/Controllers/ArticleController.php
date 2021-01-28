<?php

namespace App\Http\Controllers;

use app\Models\Article as Article;


use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index() {
        $articles = Article::all();

        return view('article', [
            'article' => $articles
        ]);
    }
    public function show (int $id) {
        $article = Article::all()->where('id', $id)->first();
        return view('article', ['name' => $article->name]);
    }
}
