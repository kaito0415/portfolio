<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function chat(Group $group)
    {
        return view('groups.chat')->with(['groups' => $group->get()]);
    }
    
    public function invite(Group $group)
    {
        return view('groups.invite')->with(['groups' => $group->get()]);
    }
}
