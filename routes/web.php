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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/heren', 'ProductController@heren')->name('heren');
Route::get('/dames', 'ProductController@dames')->name('dames');
Route::get('/kids', 'ProductController@kids')->name('kids');
Route::get('/contact', 'ProductController@contact')->name('contact');
