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
        // Validate The User
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Log the user in
        $credentials = $request->only('email', 'password');

        if (!Auth::guard('admin')->attempt($credentials)) {
            return back()->withErrors([
                'message' => 'Wrong Credential, Coba maning'
            ]);
        }

        // Session message
        session()->flash('msg', 'Kamu sudah masuk');

        // Redirect
        return redirect('/admin');
    }


}
