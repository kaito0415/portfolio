<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>チャット</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="group_name">{{ $group->name }}</h1>
            <a href="/groups/detail/{{ $group->id }}?user={{ $user->id }}">グループ詳細へ</a>
        </x-slot>
        <body>
            <div class="chats_log">
                @foreach ($chats as $chat)
                <div class="chat_log">
                    <p class="log_time">{{ $chat->created_at }}</p>
                    <p class="log_user">{{ $chat->user->name }}</p>
                    <p class="log_message">{{ $chat->message }}</p>
                    @if($chat->user->id == $user->id)
                    <div class="delete">
                        <form action="/chats/{{ $chat->id }}?group={{ $group->id }}&user={{ $user->id }}" id="form_{{ $chat->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclic="deleteChat({{ $chat->id }})">送信取り消し</button>
                        </form>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
            <form action="/chats/{{ $group->id }}/{{ $user->id }}" method="POST">
                @csrf
                <div class="create_chat">
                    <h3>メッセージを入力</h3>
                    <div class="insert_chat">
                        <input type="text" name="chat[message]" placeholder="メッセージ" />
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit">送信</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>