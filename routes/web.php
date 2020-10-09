<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/detail/{id}', 'DetailController@show')->name('detail');
Route::get('/cart/{id}', 'CartController@store')->name('cart');
Route::get('/cart', 'CartController@index')->name('cartIndex');
Route::get('/buy/{id}', 'MoneyController@buy')->name('buy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
