<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $user = 'Fikar';
        $data = [
            'fikar',
            'febrina',
            'fina'
        ];


//        return view('home.index')->with('user', $user);
        return view('home.index', compact('data'));
    }

}
