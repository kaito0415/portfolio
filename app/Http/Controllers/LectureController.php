<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\User;
use App\Http\Requests\LectureRequest;

class LectureController extends Controller
{
    public function home(Lecture $lecture, User $user)
    {
        return view('home.index')->with([
            'lectures' => $lecture->get(),
            'user' => $user
            ]);
    }
    
    public function add(User $user)
    {
        return view('lectures.add')->with(['user' => $user]);
    }
    
    public function store(LectureRequest $request, Lecture $lecture, User $user)
    {
        $input_lecture = $request['lecture'];
        $input_users = $user->id;
        $lecture->fill($input_lecture)->save();
        $lecture->users()->attach($input_users);
        return redirect('/lectures/' . $lecture->id . '/detail');
    }
    
    public function update(LectureRequest $request, Lecture $lecture)
    {
        $input_lecture = $request['lecture'];
        $lecture->fill($input_lecture)->save();
        
        return redirect('/lectures/' . $lecture->id . '/detail');
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
