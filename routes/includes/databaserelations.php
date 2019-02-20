<?php
Route::group(['prefix' => 'databaserelations'], function () {
    
    Route::view('/', 'databaserelations.home')->name('databaserelationshome');
    
    Route::resource('allFieldType', 'AllFieldTypeController');
    
    route::view('/onetoone', 'databaserelations.onetoone.home')->name('onetoonehome');
    Route::resource('oneToOneRight', 'OneToOneRightController');
    Route::post('/oneToOneRight/{oneToOneRight}/oneToOneLeft', 'OneToOneLeftController@store')->name('onetoonestore');
    Route::resource('oneToOneLeft', 'OneToOneLeftController');
    
    route::view('/onetomany', 'databaserelations.onetomany.home')->name('onetomanyhome');
    Route::resource('oneToManyOwner', 'OneToManyOwnerController');
    Route::post('/oneToManyOwner/{oneToManyOwner}/oneToManyMember', 'OneToManyMemberController@store')->name('onetomanystore');
    Route::resource('oneToManyMember', 'OneToManyMemberController');
    
    route::view('/manytomany', 'databaserelations.manytomany.home')->name('manytomanyhome');
    Route::resource('manyToManyOwnerLeft', 'ManyToManyOwnerLeftController');
    Route::resource('manyToManyOwnerRight', 'ManyToManyOwnerRightController');
    Route::resource('manyToManyPivot', 'ManyToManyPivotController');
    
    route::resource('hasManyThroughTop', 'HasManyThroughTopController');
    
    route::view('/polymorphichome', 'databaserelations.polymorphic.home')->name('polymorphichome');
    Route::resource('polymorphicOwnerLeft', 'polymorphicOwnerLeftController');
    Route::resource('polymorphicOwnerRight', 'polymorphicOwnerRightController');
    Route::resource('polymorphicMember', 'polymorphicMemberController');
});