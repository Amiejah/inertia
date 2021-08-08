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

Route::get('/', 'UserController@index')->name('users.index');
Route::get('/create', 'UserController@create')->name('users.create');
Route::post('/users/store', 'UserController@store')->name('users.store');

Route::get('/users/{user}', 'UserController@edit')->name('users.edit');
Route::post('/users/{user}', 'UserController@update')->name('users.update');
