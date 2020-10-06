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



Auth::routes();

Route::get('/', 'GuestController@index') -> name('product_home');
Route::get('/show/{id}', 'GuestController@show') -> name('product_show');

Route::get('/edit/{id}', 'LoggedController@edit') -> name('product_edit');
Route::post('/update/{id}', 'LoggedController@update') -> name('product_update');

Route::get('/destroy/{id}', 'LoggedController@destroy') -> name('product_destroy');
