<?php

Route::get('/', 'Frontend\HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    /** profile route start **/
    Route::view('/profile', 'backend/profile');
    Route::post('/profile', 'ProfileController@photo')->name('profile');
    Route::post('/password', 'ProfileController@password')->name('password.change');
    Route::post('/profile-update', 'ProfileController@update')->name('profile.update');
    /** profile route end **/

    /**  helper route start **/
    Route::post('fetch-sub-category', 'HelperController@subCategory')->name('fetch.sub.category');
    Route::post('fetch-child-category', 'HelperController@childCategory')->name('fetch.child.category');
    /**  helper route end **/
});
