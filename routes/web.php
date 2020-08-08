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

//Home
Route::get('/', 'HomeController@index');

//Articles
Route::get('/article', 'ArticleController@create')->name('article');
Route::post('/article/store', 'ArticleController@store')->name('postArticle');
Route::post('/article/{id}/comment', 'CommentController@store')->name('postComment');
Route::get('/article/{id}', 'ArticleController@show')->name('showArticle');



Auth::routes();
