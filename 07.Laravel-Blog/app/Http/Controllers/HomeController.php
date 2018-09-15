<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function index()
    public function index(Request $request)
    {
//        return "Home";
//        return $_GET['name'];
//        dd($request->all());
//        dd($request->name);
//        return $request->name;
//        echo $request->pass . "<br>" . $request->email;
        echo $request->get('name', 'Not Provided');
    }
}
