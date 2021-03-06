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

Route::get('home', 'HomeController@index');

Route::get('home/details', 'HomeController@show');

Route::get('delete-users', 'HomeController@destroy');

Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@store');
Route::get('/logout','LoginController@destroy');
Route::get('/register','RegisterController@index');
Route::post('/register','RegisterController@store');
Route::get('/search', 'HomeController@filterByEmail');

