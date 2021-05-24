<?php
Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['admin', 'auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/contacts', 'ContactController@index')->name('contacts');
    Route::put('contacts/update/{id}', 'ContactController@update')->name('contacts.update');

    Route::resources([

        'users'      => 'UserController',
        'faqs'       => 'FaqController',
        'categories' => 'CategoryController',
        'sub-categories' => 'SubCategoryController',
        'child-categories' => 'ChildCategoryController',
    ]);

});