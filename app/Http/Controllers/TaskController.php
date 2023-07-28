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
}
