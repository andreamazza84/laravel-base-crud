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

//BlogController
Route::get('/', 'BlogController@index')->name('home');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/contacts', 'BlogController@contacts')->name('contacts');
//MainController
Route::resource('posts','MainController');