<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
//        $data = ['Fikar', 'Febrina', 'Fiktor'];

/*        $data = [
            'name' => 'Fikar',
            'email' => 'fikar@gmail.com',
        ];*/

//        $collect = collect($data);

//        dd($collect);

//        dd(get_class($collect));

//        dd($collect->first());
//        dd($collect->last());

//        dd($collect[0]);
//        dd($collect[1]);

/*        foreach ($collect as $item) {
            echo "$item ";
        }*/

        $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

//        dd($posts);
//        dd($posts->all());
//        dd($posts->count());

//        $posts->toArray();
        $posts->toJson();
        return $posts;

//        return view('posts.posts', compact('posts'));






    }
}
