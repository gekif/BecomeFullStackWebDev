<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // Basic Query Builder
//        $posts = DB::table('posts')->get();

//        $posts = DB::table('posts')->first();

//        dd($posts);

        // Query Builder Using Where
//        $posts = DB::table('posts')->where('id', 4)->get();
//        $posts = DB::table('posts')->where('id','<', 4)->get();
//        $posts = DB::table('posts')->where('id','=', 4)->get();
//        $posts = DB::table('posts')->where('id','>', 4)->get();

//        $posts = DB::table('posts')->where('status','=', 1)->get();
//        $posts = DB::table('posts')->where('status', 1)->get();
//        $posts = DB::table('posts')->where('status', true)->get();

//        $posts = DB::table('posts')->orderBy('id', 'asc')->get();
//        $posts = DB::table('posts')->orderBy('id', 'desc')->get();
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

        return view('posts.posts', compact('posts'));






    }
}
