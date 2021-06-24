<?php
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index');
    Route::view('/services', 'frontend/service')->name('services.index');
    Route::post('/services/store', 'ServiceController@store')->name('services.store');
    Route::get('/seller-login', 'LoginController@seller')->name('seller-login');
    Route::get('/merchant-login', 'LoginController@merchant')->name('merchant-login');
    Route::get('/estore-login', 'LoginController@estore')->name('estore-login');
    Route::get('/seller-registration', 'RegisterController@seller')->name('seller-registration');
    Route::get('/merchant-registration', 'RegisterController@merchant')->name('merchant-registration');
    Route::get('/estore-registration', 'RegisterController@estore')->name('estore-registration');
    Route::post('/merchant-register', 'RegisterController@merchantRegister')->name('merchant-register');
    Route::post('/estore-register', 'RegisterController@estoreRegister')->name('estore-register');
});

Auth::routes();

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
