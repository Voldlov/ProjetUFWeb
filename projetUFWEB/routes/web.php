<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article;
use App\models\User as User;

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

Route::get('panier', function () {
    return view('panier');
});


Route::get('/articles', [ArticleController::class, 'index']);
Route::get('show/{id}', "\App\Http\Controllers\ArticleController@show")->name('showArticle');

/*Route::post('signin', function() {
    $utilisateur = new User;
    $utilisateur->email = request('email');
    $utilisateur->password = bcrypt('password');
    $utilisateur->name = request('name');
    $utilisateur->save();
});*/
//cette partie a été retiré pour ne pas faire du bug pour la présentation
//cette partie est pour la création d'utilisateur, elle fait partie des nombreux teste fait
//pas encore opérationnelle. 