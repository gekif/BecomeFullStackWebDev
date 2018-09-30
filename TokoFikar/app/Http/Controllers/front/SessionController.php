<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function index()
    {
        return view('front.session.index');
    }


    public function store(Request $request)
    {
        // Validate the user
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $request->validate($rules);

        // Check if exists
        $data = request(['email', 'password']);
        if (!auth()->attempt($data)) {
            return back()->withErrors([
                'message' => 'Wrong credentials, please try again'
            ]);
        }

        // Redirect
        return redirect('/user/profile');
    }


    public function logout()
    {
        auth()->logout();
        session()->flash('msg', 'You have been logged out successfully');
        return redirect('/user/login');
    }
}
