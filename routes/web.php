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

Route::view('/', 'home')->name('home');

Route::resource('allFieldType', 'AllFieldTypeController');

route::view('/onetoone', 'onetoone.onetoonehome')->name('onetoonehome');
Route::resource('oneToOneRight', 'OneToOneRightController');
Route::post('/oneToOneRight/{oneToOneRight}/oneToOneLeft', 'OneToOneLeftController@store')->name('onetoonestore');
Route::resource('oneToOneLeft', 'OneToOneLeftController');

route::view('/onetomany', 'onetomany.onetomanyhome')->name('onetomanyhome');
Route::resource('oneToManyOwner', 'OneToManyOwnerController');
Route::post('/oneToManyOwner/{oneToManyOwner}/oneToManyMember', 'OneToManyMemberController@store')->name('onetomanystore');
Route::resource('oneToManyMember', 'OneToManyMemberController');

route::view('/manytomany', 'manytomany.manytomanyhome')->name('manytomanyhome');
Route::resource('manyToManyOwnerLeft', 'ManyToManyOwnerLeftController');
Route::resource('manyToManyOwnerRight', 'ManyToManyOwnerRightController');
Route::resource('manyToManyPivot', 'ManyToManyPivotController');

route::resource('hasManyThroughTop', 'HasManyThroughTopController');

route::view('/polymorphichome', 'polymorphic.home')->name('polymorphichome');
Route::resource('polymorphicOwnerLeft', 'polymorphicOwnerLeftController');
Route::resource('polymorphicOwnerRight', 'polymorphicOwnerRightController');
Route::resource('polymorphicMember', 'polymorphicMemberController');
