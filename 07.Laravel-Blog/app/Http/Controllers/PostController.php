<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $request = [
            'title' => 'Learning Laravel',
            'body' => 'This is nice'
        ];

        // First Method Insert
//        $post = Post::create($request);

//        dd($post);


        // Second Method Insert
/*        $post = new Post;

        $post->title = 'New Post Title';
        $post->body = 'This is the body of the post';

        $post->save();*/


        // First Method Update
/*        $post = Post::find(1);

        $post->update([
            'title' => 'Title Updated',
            'body' => 'Body Updated'
        ]);

        $post->save();*/


        // Second Method Update
/*        $post = Post::where('id', 2)->update([
            'title' => 'Updated 11',
            'body' => 'Body updated 11'
        ]);

        dd($post);*/


        // First Method Delete
/*        $post = Post::where('id', 2)->delete();

        dd($post);*/


        // Second Method Delete
        $post = Post::find(1);
        $post->delete();

        dd($post);





    }
}
