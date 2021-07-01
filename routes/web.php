<?php
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index');
    Route::view('/services', 'frontend/service')->name('services.index');
    Route::post('/services/store', 'ServiceController@store')->name('services.store');

    Route::get('/seller-login', 'LoginController@seller')->name('seller-login');
    Route::get('/merchant-login', 'LoginController@merchant')->name('merchant-login');
    Route::get('/estore-login', 'LoginController@estore')->name('estore-login');
    Route::get('/user-login', 'LoginController@user')->name('user-login');
    Route::get('/seller-registration', 'RegisterController@seller')->name('seller-registration');
    Route::get('/merchant-registration', 'RegisterController@merchant')->name('merchant-registration');
    Route::get('/estore-registration', 'RegisterController@estore')->name('estore-registration');
    Route::get('/user-registration', 'RegisterController@user')->name('user-registration');
    Route::post('/merchant-register', 'RegisterController@merchantRegister')->name('merchant-register');
    Route::post('/estore-register', 'RegisterController@estoreRegister')->name('estore-register');
    Route::post('/user-register', 'RegisterController@userRegister')->name('user-register');

    route::get('/category/{id}/{slug}', 'ProductController@products')->name('category.products');
    route::get('/product/{slug}', 'ProductController@product')->name('detail.product');

    route::get('/buy-now/{product_id}', 'CartController@buy')->name('buy.now');
    route::get('/carts', 'CartController@cart')->name('cart');
    route::post('/carts/store', 'CartController@store')->name('cart.store');
    route::post('/carts/destroy', 'CartController@delete')->name('cart.delete');

    route::get('/checkouts', 'CheckoutController@index')->name('checkout');
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
