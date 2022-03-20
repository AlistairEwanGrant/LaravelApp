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



Route::get('/', "App\Http\Controllers\PagesController@index");

Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('posts/create', 'App\Http\Controllers\PostsController@create');

Route::post('posts/create', 'App\Http\Controllers\PostsController@store');

Route::get('posts/{id}/edit', 'App\Http\Controllers\PostsController@update');

Route::put('posts/{id}/edit', 'App\Http\Controllers\PostsController@update');

Route::delete('posts/{id}/edit', 'App\Http\Controllers\PostsController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home/{id}/editBio', 'App\Http\Controllers\HomeController@edit');

Route::put('home/{id}/editBio', 'App\Http\Controllers\HomeController@update');

Route::get('posts/{id}/delete', 'App\Http\Controllers\PostsController@showDelete');

Route::delete('posts/{id}/delete', 'App\Http\Controllers\PostsController@destroy');

