<?php

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store')->name('user.login');

Route::get('/success', function () {
    echo '<strong>Successfully</strong>';
})->name('success');