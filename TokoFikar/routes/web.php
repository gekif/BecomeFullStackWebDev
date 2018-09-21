<?php

/**
 * Admin Route
 */

Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', 'DashboardController@index');

    // Products
    Route::resource('/products', 'ProductController');

    // Orders
    Route::resource('/orders', 'OrderController');
    Route::get('/confirm/{id}', 'OrderController@confirm');
    Route::get('/pending/{id}', 'OderController@pending');

    // Users
    Route::resource('/users', 'UserController');

    // Admin Login
    Route::get('/admin/login', 'AdminUserController@index');
    Route::post('/admin/login', 'AdminUserController@store');
});

/**
 * Front Routes
 */
