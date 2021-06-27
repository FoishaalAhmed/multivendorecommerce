<?php
Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['admin', 'auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/contacts', 'ContactController@index')->name('contacts');
    Route::put('contacts/update/{id}', 'ContactController@update')->name('contacts.update');
    Route::get('/services', 'ServiceController@index')->name('services.index');
    Route::get('services/{id}', 'ServiceController@show')->name('services.show');
    Route::delete('services/destroy/{id}', 'ServiceController@show')->name('services.destroy');

    Route::resources([

        'users'               => 'UserController',
        'sliders'             => 'SliderController',
        'pages'               => 'PageController',
        'faqs'                => 'FaqController',
        'brands'              => 'BrandController',
        'colors'              => 'ColorController',
        'sizes'               => 'SizeController',
        'categories'          => 'CategoryController',
        'sub-categories'      => 'SubCategoryController',
        'child-categories'    => 'ChildCategoryController',
        'seller-categories'   => 'SellerCategoryController',
        'merchant-categories' => 'MerchantCategoryController',
        'estore-categories'  => 'EstoreCategoryController',
    ]);

});