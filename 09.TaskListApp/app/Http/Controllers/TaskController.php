<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

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

//        dd($request->title);

        Task::create([
            'title' => $request->title
        ]);

        session()->flash('msg', 'Task has been created');

        return redirect('/');
    }
}
