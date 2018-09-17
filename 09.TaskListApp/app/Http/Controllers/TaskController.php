<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all()->sortByDesc('created_at');
        return view('tasks.index', compact('tasks'));
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


    public function destroy($id)
    {
//        dd($id);
        Task::destroy($id);

        return redirect()->back()->with('msg', 'Tash has been deleted');
    }


}
