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

Route::get('/', 'HotelController@home') -> name('home');

Route::get('ospite/{id}', 'HotelController@ospite') -> name('ospite');

Route::get('create', 'HotelController@create') -> name('create');

Route::post('store', 'HotelController@store') -> name('store');
