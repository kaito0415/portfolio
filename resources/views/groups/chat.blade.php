<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>チャット</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            
        </x-slot>
        <body>
            <div class="chats_log">
                @foreach ($chats as $chat)
                <div class="chat_log">
                    <p class="log_time">{{ $chat->created_at }}</p>
                    <p class="log_user">{{ $chat->user->name }}</p>
                    <p class="log_message">{{ $chat->message }}</p>
                </div>
                @endforeach
            </div>
            <form action="/chats" method="POST">
                @csrf
                <div class="create_chat">
                    <h3>メッセージを入力</h3>
                    <div class="insert_chat">
                        <input type="text" name="chat[message]" placeholder="メッセージ" />
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>