<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
         $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
    
    public function show($id)
    {
        $tasks = Task::find($id);

        return view('tasks.show', [
            'tasks' => $tasks,
        ]);
    }
    
    public function create()
    {
        $tasks = new Task;

        return view('tasks.create', [
            'tasks' => $tasks,
        ]);
    }
    
    public function store(Request $request)
    {
        $request->user()->tasks()->create([
            'content' => $request->content,
            'status' => $request->status,
        ]);

        return redirect('tasks');
    }
        
    
    public function edit($id)
    {
        $tasks = Task::find($id);

        return view('tasks.edit', [
            'tasks' => $tasks,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $tasks = Task::find($id);
        $tasks->content = $request->content;
        $tasks->status = $request->status;
        $tasks->save();

        return redirect('tasks');
    }
    
    
     public function destroy($id)
    {
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect('tasks');
    }
}
