<?php

use Illuminate\Database\Seeder;

use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 500)->create()->each(function ($post) {
            $post->save();
        });
    }

}
