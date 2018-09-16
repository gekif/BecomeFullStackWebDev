<?php

Route::get('/', 'ContactController@index');
Route::post('/', 'ContactController@store')->name('contact.store');