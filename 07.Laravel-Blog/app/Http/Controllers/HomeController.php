<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return '<form method="post">
                    <input type="text" name="name" action="'.route('contact').'"><input type="submit">
                </form>';
    }

    public function store(Request $request)
    {
//        dd($request->all());
//        dd($request->name);
        return $request->name;
    }
}
