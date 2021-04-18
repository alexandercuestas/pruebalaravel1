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

/*Route::get('/', 'PageController@emails');
Route::get('list/{email}', 'PageController@email')->name('email');*/

Route::get('/', 'PageController@emails');
Route::get('list/{email}', 'PageController@email')->name('email');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Accesos con inicio de sesión
Route::resource('/emails', 'EmailController')->middleware('auth');
Route::resource('/users', 'UserController')->middleware('auth');
