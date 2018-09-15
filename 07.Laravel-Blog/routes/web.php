<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
//    echo Config::get('services.braintree.secret');
    echo Config::get('services.mailgun.secret');
});