<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    
    public function invite(Group $group)
    {
        return view('groups.invite')->with(['groups' => $group->get()]);
    }
    
}
