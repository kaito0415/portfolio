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
        return view('groups.index')->with(['user' => $user,]);
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
    
    public function entry(User $user)
    {
        return view('groups.entry')->with(['user' => $user]);
    }
    
    public function check(Request $request, Group $group, User $user)
    {
        $find_group = Group::find($request->entry_id);
        $result = $group->confirm($request->user, $request->entry_id, $request->entry_password, $find_group->password, $user);
        return redirect($result);
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
    
    public function detail(Group $group)
    {
        return view('groups.detail')->with(['group' => $group]);
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
    
    public function delete(Request $request, Group $group)
    {
        $group->users()->detach($request->user);
        return redirect("/groups/" . $request->user . "/index");
    }
    
}
