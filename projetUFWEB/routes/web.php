<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//page home
Route::get('/', function () {
    return view('welcome');
});

Route::get('a', function () {
    return view('rechercheProjet');
});

Route::get('b', function () {
    return view('article.index');
});

Route::get('c', function () {
    return view('article.create');
});

Route::resource('article', [ArticleController::class, 'index']);

