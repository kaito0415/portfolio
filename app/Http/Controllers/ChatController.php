<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Http\Requests\chatRequest;

class ChatController extends Controller
{
    
    public function chat(Group $group, Chat $chat)
    {
        return view('groups.chat')->with([
            'group' => $group,
            'chats' => $chat
            ]);
    }
    
    public function store(ChatRequest $request, Chat $chat)
    {
        $input = $request['chat'];
        $input["group_id"] = 1;
        $input["user_id"] = 1;
        $chat->fill($input)->save();
        return redirect('/chats/{group}');
    }
}
