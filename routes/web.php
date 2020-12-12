<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@admin')->name('admin');
    Route::get('/add-product', 'AdminController@add_product')->name('add_product');
    Route::post('/insert-product', 'AdminController@insert_product')->name('insert_product');
    Route::get('/all-products', 'AdminController@all_products')->name('all_products');
    Route::get('/delete-product/{id}', 'AdminController@delete_product')->name('delete_product')->where('id', '[0-9]+');
    Route::get('/change-product/{id}', 'AdminController@change_product')->name('change_product')->where('id', '[0-9]+');
    Route::get('/delete-image/{id}', 'AdminController@delete_image')->name('delete_image');
    Route::post('/update-project/{id}', 'AdminController@update_product')->name('update_product');
});

Auth::routes();
