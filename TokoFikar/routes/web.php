<?php

/**
 * Admin Routes
 */
Route::prefix('admin')->group(function () {

    Route::middleware('auth:admin')->group(function () {
// Dashboard
        Route::get('/', 'DashboardController@index');

        // Products
        Route::resource('/products', 'ProductController');

        // Orders
        Route::resource('/orders', 'OrderController');
        Route::get('/confirm/{id}', 'OrderController@confirm')->name('order.confirm');
        Route::get('/pending/{id}', 'OrderController@pending')->name('order.pending');

        // Users
        Route::resource('/users', 'UsersController');

        // Logout
        Route::get('/logout', 'AdminUserController@logout');
    });


    // Admin Login
    Route::get('/login', 'AdminUserController@index');
    Route::post('/login', 'AdminUserController@store');
});


/**
 * Front End Routes
 */

Route::get('/', 'front\HomeController@index');

// User Registration
Route::get('/user/register', 'front\RegistrationController@index');
Route::post('/user/register', 'front\RegistrationController@store');

// User Login
Route::get('/user/login', 'front\SessionController@index');
Route::post('/user/login', 'front\SessionController@store');

// User Logout
Route::get('/user/logout', 'front\SessionController@logout');

Route::get('/user/profile', function () {
    return 'Welcome - User';
});