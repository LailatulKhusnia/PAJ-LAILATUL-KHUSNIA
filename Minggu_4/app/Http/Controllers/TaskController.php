<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function create(){
        return view('task.create');
    }

    
    public function show(Task $task){
        return view('task.show', compact('task'));
    }

    public function edit($id){
        $tasks = Task::findOrFail($id);
        return view('task.edit', compact('tasks'));
    }

    public function update(Request $request, $id){
        $tasks = Task::FindOrFail($id);
        $tasks->update($request->all());
        return redirect('/task');
    }


    public function store(TaskRequest $request){
        $validatedData = $request->validated();
        Task::create($validatedData);
        return redirect('/task');
    }

    public function delete(Task $task){
        $task->delete();
        return redirect('/task');
    }


}