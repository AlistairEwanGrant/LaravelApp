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

Route::get('/about', "App\Http\Controllers\PagesController@about");

Route::get('/services', "App\Http\Controllers\PagesController@services");

Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('posts/create', 'App\Http\Controllers\PostsController@create');

Route::post('posts/create', 'App\Http\Controllers\PostsController@store');

Route::get('posts/{id}/edit', 'App\Http\Controllers\PostsController@update');

Route::put('posts/{id}/edit', 'App\Http\Controllers\PostsController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
