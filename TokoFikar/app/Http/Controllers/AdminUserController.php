<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        // Validate the user
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        // Log the user In
        $crendentials = $request->only('email', 'password');

       if(! Auth::guard('admin')->attempt($crendentials)) {
           return back()->withErrors([
               'message' => 'Wewenang tidak terdaftar, coba lagi'
           ]);
       }


        // Session message
        session()->flash('msg', 'Kamu telah masuk');


        // Redirect
        return redirect('/admin');
    }
}
