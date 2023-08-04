<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Http\Requests\LectureRequest;

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
    
    public function store(LectureRequest $request, Lecture $lecture)
    {
        $input = $request['lecture'];
        $lecture->fill($input)->save();
        return redirect('/lectures/detail');
    }
    
    public function update(LectureRequest $request, Lecture $lecture)
    {
        $input_lecture = $request['lecture'];
        $lecture->fill($input_lecture)->save();
        
        return redirect('/lectures/detail');
    }
    
    public function edit(Lecture $lecture)
    {
        return view('lectures.edit')->with(['lecture' => $lecture]);
    }
    
    public function detail(Lecture $lecture)
    {
        return view('lectures.detail')->with(['lecture' => $lecture]);
    }
}
