<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Http\Requests\GroupRequest;

class GroupController extends Controller
{
    
    public function make(Group $group)
    {
        return view('groups.make')->with(['groups' => $group]);
    }
    
    public function store(GroupRequest $request, Group $group)
    {
        $input = $request['group'];
        $group->fill($input)->save();
        return redirect('/chats/' . $group->id);
    }
    
    public function invite(Group $group)
    {
        return view('groups.invite')->with(['groups' => $group->get()]);
    }
    
}
