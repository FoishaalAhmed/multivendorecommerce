<?php
Route::group(['prefix' => '/merchant', 'namespace' => 'Merchant', 'as' => 'merchant.', 'middleware' => ['merchant', 'auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::resources([

        'products' => 'ProductController',
    ]);

});