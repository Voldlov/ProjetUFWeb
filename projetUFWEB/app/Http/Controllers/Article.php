<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article extends Controller
{
    //
    public function index()
    {
        $data = ['a'];

        return \view('article.index', ['data' => $data]);
    }
}
