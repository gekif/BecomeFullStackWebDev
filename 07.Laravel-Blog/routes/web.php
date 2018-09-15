<?php

Route::get('/contact', 'HomeController@index');

Route::post('/contact', 'HomeController@store')->name('contact');