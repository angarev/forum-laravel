<?php

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

Route::get('/', 'FrontAndController@page')->name('home');

Route::get('/about', 'FrontAndController@page')->name('about');

Route::get('/contact', 'FrontAndController@page')->name('contact');

Route::get('/blog', 'FrontAndController@page')->name('blog');
