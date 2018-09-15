<?php

Route::get('/home/landingpage', function () {
    echo "Home Page";
})->name('home');

Route::get('/page', function () {
    return redirect()->route('home');
});
