<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('front.registration.index');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
