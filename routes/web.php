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

use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/create', 'HomeController@create')->name('create');
    Route::post('/store', 'HomeController@store')->name('store');
    Route::get('/edit/{id}', 'HomeController@edit')->name('create');
    Route::post('/update/{id}', 'HomeController@update')->name('update');
    Route::post('/delete/{id}', 'HomeController@delete')->name('delete');
});
