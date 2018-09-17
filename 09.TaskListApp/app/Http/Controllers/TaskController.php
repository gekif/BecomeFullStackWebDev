<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }

    public function store(Request $request)
    {
//        dd($request->all());

        // Validation
        $request->validate([
            'title' => 'required'
        ]);
    }
}
