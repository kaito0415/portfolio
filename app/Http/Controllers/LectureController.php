<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function home(Lecture $lecture)
    {
        return view('home.index')->with(['lectures' => $lecture->get()]);
    }
    
    public function add(Lecture $lecture)
    {
        return view('lectures.add')->with(['lectures' => $lecture->get()]);
    }
    
    public function edit(Lecture $lecture)
    {
        return view('lectures.edit')->with(['lectures' => $lecture->get()]);
    }
    
    public function detail(Lecture $lecture)
    {
        return view('lectures.detail')->with(['lectures' => $lecture->get()]);
    }
}