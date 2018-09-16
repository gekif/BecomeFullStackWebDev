<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
//        echo 'Hello World';

//        $posts = Post::all();

//        $posts = Post::where('id', 1);

//        $posts = Post::where('id', 1)->first();
//        $posts = Post::where('id', 1)->get();

//        $posts = Post::take(2)->get();
        $posts = Post::take(3)->get();

//        dd($posts);

        return view('posts.posts', compact('posts'));
    }
}
