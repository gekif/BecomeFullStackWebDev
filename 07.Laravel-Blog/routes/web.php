<?php

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        echo 'Admin Panel';
    });

    Route::get('/user', function () {
        echo 'Admin User';
    });

    Route::get('/profile', function () {
        echo 'Admin Profile';
    });

    Route::get('/settings', function () {
        echo 'Admin Settings';
    });

});

