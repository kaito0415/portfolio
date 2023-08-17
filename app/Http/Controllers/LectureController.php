<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\User;
use App\Http\Requests\LectureRequest;

class LectureController extends Controller
{
    public function home(User $user)
    {
        return view('home.index')->with([
            'first_lectures' => $user->getMyTimeTable(1),
            'second_lectures' => $user->getMyTimeTable(2),
            'third_lectures' => $user->getMyTimeTable(3),
            'fourth_lectures' => $user->getMyTimeTable(4),
            'fifth_lectures' => $user->getMyTimeTable(5),
            'sixth_lectures' => $user->getMyTimeTable(6),
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
