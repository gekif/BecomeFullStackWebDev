<?php

Route::get('/contact', function () {
    echo "Hello from contact page";
});

Route::get('/user/{id}', function ($id) {
    echo "Hello from $id";
});

Route::get('/user/{id}/posts/{postId}', function ($id, $postId) {
    echo "Hello from $id and your post is $postId";
});

Route::get('/user/{id?}', function ($id = null) {
     echo "$id Without ID";
});