<?php

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store')->name('user.login');