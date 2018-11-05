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

Route::get('/', 'AllFieldTypeController@index');
Route::resource('allFieldType', 'AllFieldTypeController');
Route::get('allFieldType/{allFieldType}/delete', 'AllFieldTypeController@destroy');