<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'KontakController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/kontak/create', 'KontakController@create');
Route::post('/kontak/create', 'KontakController@store');
Route::get('/kontak/{id}/edit','KontakController@edit')->name('kontak.edit');
Route::put('/kontak/{id}/edit','KontakController@update')->name('kontak.update');
Route::delete('/kontak/{id}' , 'KontakController@destroy')->name('kontak.delete');
Route::any('/home', 'HomeController@index');

