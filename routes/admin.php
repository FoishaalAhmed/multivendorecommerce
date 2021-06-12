<?php
Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['admin', 'auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/contacts', 'ContactController@index')->name('contacts');
    Route::put('contacts/update/{id}', 'ContactController@update')->name('contacts.update');

    Route::resources([

        'users'            => 'UserController',
        'pages'            => 'PageController',
        'faqs'             => 'FaqController',
        'brands'           => 'BrandController',
        'colors'           => 'ColorController',
        'sizes'            => 'SizeController',
        'categories'       => 'CategoryController',
        'sub-categories'   => 'SubCategoryController',
        'child-categories' => 'ChildCategoryController',
        'seller-categories' => 'SellerCategoryController',
    ]);

});