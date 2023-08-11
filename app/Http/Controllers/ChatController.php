<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Http\Requests\ChatRequest;

class ChatController extends Controller
{
    
    public function chat(Chat $chat)
    {
        return view('chats.chat')->with(['chats' => $chat]);
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
