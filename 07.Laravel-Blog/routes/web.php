<?php

Route::get('/mail', 'MailController@index');
Route::post('/mail', 'MailController@store')->name('mail.store');