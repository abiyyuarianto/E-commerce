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

Route::resource('/', 'LandingPageController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile');
// Route::resource('/shop', 'ShopController');
Route::get('/shop', 'ShopController@store');
Route::get('/shop/detail/{id}', 'ShopController@edit');
Route::get('/shop/category/{id}', 'ShopController@category');
Route::resource('/cart', 'CartController');
// Route::patch('/cart/{id}', 'CartController@update');

Route::post('/checkout', 'CheckoutController@store');
