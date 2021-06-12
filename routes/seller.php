<?php
Route::group(['prefix' => '/seller', 'namespace' => 'Seller', 'as' => 'seller.', 'middleware' => ['seller', 'auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::resources([

        'products' => 'ProductController',
    ]);

});