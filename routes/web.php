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

Route::get('/','PagesController@about');
// Route::get('/login',['uses'=>'PagesController@login'])->name('login');
// Route::get('/register',['uses'=>'PagesController@register'])->name('register');
Route::get('/home','PagesController@home');
Route::get('/posts','PagesController@posts');
// Route::get('/edit_post','PagesController@edit_post');

Route::resource('posts','PostsController');


Auth::routes();

Route::get('/dashboard','DashboardController@index');
