<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Lecture;
use App\Models\User;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    
   public function index(Task $task, User $user)
   {
       return view('tasks.index')->with([
           'tasks' => $task,
           'user' => $user,
           ]);
   }
    
   public function add(Lecture $lecture, User $user) 
   {
       return view('tasks.add')->with(['user' => $user]);
   }
   
   public function store(TaskRequest $request, Task $task)
    {
        $input = $request['task'];
        $task->fill($input)->save();
        return redirect('/tasks/' . $task->id . '/detail/' . $request->user);
    }
    
    public function update(TaskRequest $request, Task $task)
    {
        $input_task = $request['task'];
        $task->fill($input_task)->save();
        return redirect('/tasks/' . $task->id . '/detail/' . $request->user);
    }
   
   public function edit(Task $task, User $user)
   {
       return view('tasks.edit')->with([
           'task' => $task,
           'user' => $user,
           ]);
   }
   
   public function detail(Task $task, User $user)
   {
       return view('tasks.detail')->with([
           'task' => $task,
           'user' => $user,
           ]);
   }
   
   public function delete(Request $request, Task $task)
   {
       $task->delete();
       return redirect("/tasks/index/" . $request->user);
   }
}
