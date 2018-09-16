<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
//        dd($request->all());

        // Validate
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

//        return redirect()->route('success');
//        return redirect()->back();
        return redirect()->back()->with('msg', 'Thanks for entering data');


    }
}
