<?php

// Dashboard
Route::get('/', 'DashboardController@index');

//Products
Route::resource('/products', 'ProductController');
//Route::get('/products', 'ProductController');