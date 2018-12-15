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

Route::get('/', 'HomeController@welcome')->name('welcome')->middleware('guest');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/shops', 'ShopController@index')->name('shops');
Route::get('/shop/{shop_id}', 'ShopController@show')->name('shop');
Route::get('/shop/{shop_id}/drink/{drink_id}', 'DrinkController@index')->name('drinks');
