<?php

Route::get('/', 'PostController@index');

Route::get('/seed', function (\App\Post $post) {
    $faker = \Faker\Factory::create();

    foreach (range(1, 50) as $i) {
        $post->create([
            'title' => $faker->sentence(10),
            'body' => $faker->sentence(50)
        ]);

    }
});