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

Route::get('/','AccueilController@index');

Route::get('profile/{id}/{section}', 'ProfileController@show')->name('show.posts');

Auth::routes();

Route::get('/logout','LogoutController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
