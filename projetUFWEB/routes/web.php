<?php

use Illuminate\Support\Facades\Route;

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

//création d'url pour les articles suivant l'identifiant donné
//il reste à faire l'ajout d'id par l'extérieur (avec la base de donné et le header clickable)
//et la page html (front) à finir
Route::get('article/{article}', function ($articleId) {
    return 'Article : ' . $articleId;
})->where('article', '[0-9]+');


//création d'url pour les utilisateurs suivant l'identifiant donné
//il reste à faire l'ajout d'id par l'extérieur (avec la base de donné et le header clickable)
//et la page html (front) à finir
Route::get('user/{user}', function ($UserId) {
    return 'Page utilisateur : ' . $UserId;
})->where('article', '[0-9]+');