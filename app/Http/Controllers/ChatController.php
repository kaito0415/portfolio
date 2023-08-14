<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;
use App\Models\Group;
use App\Http\Requests\ChatRequest;

class ChatController extends Controller
{
    
    public function store(ChatRequest $request, Chat $chat,Group $group, User $user)
    {
        $input = $request['chat'];
        $input["group_id"] = $group->id;
        $input["user_id"] = $user->id;
        $chat->fill($input)->save();
        return redirect('/groups/' . $group->id . '/chat/' . $user->id);
    }
    
}
