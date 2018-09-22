<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // Session message

        // Redirect

    }
}
