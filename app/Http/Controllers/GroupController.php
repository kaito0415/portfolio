<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use App\Http\Requests\GroupRequest;

class GroupController extends Controller
{
    
    public function index(Group $group, User $user)
    {
        return view('groups.index')->with([
            'groups' => $group,
            'user' => $user,
            ]);
    }
    
    public function make(Group $group, User $user)
    {
        return view('groups.make')->with([
            'groups' => $group,
            'user' => $user,
            ]);
    }
    
    public function store(GroupRequest $request, Group $group, User $user)
    {
        $input_group = $request['group'];
        $input_users = $user->id;
        $group->fill($input_group)->save();
        $group->users()->attach($input_users);        
        return redirect('/groups/' . $group->id . '/chat/' . $user->id);
    }
    
    public function edit(Group $group, User $user)
    {
        return view('groups.edit')->with([
            'group' => $group,
            'user' => $user,
            ]);
    }
    
    public function update(GroupRequest $request, Group $group, User $user)
    {
        $input_group = $request['group'];
        $group->fill($input_group)->save();
        return redirect('/groups/' . $group->id . '/chat/' . $user->id);
    }
    
    public function invite(Group $group)
    {
        return view('groups.invite')->with(['groups' => $group->get()]);
    }
    
    public function chat(Group $group, User $user)
    {
        return view('groups.chat')->with([
            'group' => $group,
            'chats' => $group->getByChat(),
            'user' => $user,
            ]);
    }
    
}
