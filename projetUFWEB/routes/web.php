<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article;
use App\models\User as User;
use app\http\controllers\ArticleController;

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

//page d'enregistrement
Route::get('signin', function () {
    return view('signin');
});

//page de connexion
Route::get('login', function () {
    return view('login');
});

//page de profil
Route::get('profil', function () {
    return view('profil');
});

//page de recherche d'article
Route::get('recherche', function () {
    return view('recherche');
});

//page d'article
Route::get('article', function () {
    return view('article');
});

//page de panier
Route::get('panier', function () {
    return view('panier');
});

//
Route::resource('article', ArticleController::class);

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