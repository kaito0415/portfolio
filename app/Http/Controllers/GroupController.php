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
        return redirect('/groups/' . $group->id . '/chat');
    }
    
    public function edit(Group $group)
    {
        return view('groups.edit')->with(['group' => $group]);
    }
    
    public function update(GroupRequest $request, Group $group)
    {
        $input_group = $request['group'];
        $group->fill($input_group)->save();
        return redirect('/groups/' . $group->id . '/chat');
    }
    
    public function invite(Group $group)
    {
        return view('groups.invite')->with(['groups' => $group->get()]);
    }
    
    public function chat(Group $group)
    {
        return view('groups.chat')->with(['chats' => $group->getByChat()]);
    }
    
}
