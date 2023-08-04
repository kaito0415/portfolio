<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
   public function add(Task $task) 
   {
       return view('tasks.add')->with(['tasks' => $task->get()]);
   }
   
   public function store(TaskRequest $request, Task $task)
    {
        $input = $request['task'];
        $input["lecture_id"] = 1;
        $task->fill($input)->save();
        
        
        return redirect('/tasks/detail');
    }
   
   public function edit(Task $task)
   {
       return view('tasks.edit')->with(['tasks' => $task->get()]);
   }
   
   public function detail(Task $task)
   {
       return view('tasks.detail')->with(['tasks' => $task->get()]);
   }
}
