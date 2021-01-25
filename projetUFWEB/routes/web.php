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

Route::get('/users', [UserController::class, 'index']);

Route::get('article', function () {
    return view('article.index');
});

//création d'url pour les articles suivant l'identifiant donné
//il reste à faire l'ajout d'id par l'extérieur (avec la base de donné et le header clickable)
//et la page html (front) à finir
Route::get('projet/{article}', function ($articleId) {
    return view('projet');
    //'Article : ' . $articleId;
})->where('article', '[0-9]+');


//création d'url pour les utilisateurs suivant l'identifiant donné
//il reste à faire l'ajout d'id par l'extérieur (avec la base de donné et le header clickable)
//et la page html (front) à finir
Route::get('user/{user}', function ($UserId) {
    return 'Page utilisateur : ' . $UserId;
})->where('article', '[0-9]+');