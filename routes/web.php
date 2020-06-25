<?php

use App\Post;
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

Route::get('/', function () {
    $post = Post::get()->toArray();
    return view('accueil',compact('post'));
});

Route::get('profile/{id}/posts', 'ProfileController@show')->name('show.posts');
Route::get('profile/{id}/pints', 'ProfileController@show')->name('show.pints');
Route::get('profile/{id}/abonnements', 'ProfileController@show')->name('show.abonnements');

Auth::routes();

Route::get('/logout','LogoutController@index');

Route::get('/home', 'HomeController@index')->name('home');

