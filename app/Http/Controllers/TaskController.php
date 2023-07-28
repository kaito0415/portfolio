<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   public function add(Task $task) 
   {
       return view('tasks.add')->with(['tasks' => $task->get()]);
   }
   
   public function edit(Task $task)
   {
       return view('tasks.edit')->with(['tasks' => $task->get()]);
   }
}
