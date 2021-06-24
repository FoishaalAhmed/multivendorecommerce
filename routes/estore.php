<?php
Route::group(['prefix' => '/estore', 'namespace' => 'Estore', 'as' => 'estore.', 'middleware' => ['e.store', 'auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::resources([

        'products' => 'ProductController',
    ]);

});