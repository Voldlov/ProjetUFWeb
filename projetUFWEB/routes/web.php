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
    return view('home');
});

Route::get('signin', function () {
    return view('signin');
});

Route::get('login', function () {
    return view('login');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('recherche', function () {
    return view('recherche');
});

Route::get('article', function () {
    return view('article');
});