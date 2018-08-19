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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home');

Route::post('/nuevo-perro', 'AdminController@nuevoPerro')->name('nuevo.perro');
Route::post('/nuevo-cachorro', 'AdminController@nuevoCachorro')->name('nuevo.cachorro');
