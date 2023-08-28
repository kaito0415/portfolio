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
            <a href="/groups/detail/{{ $group->id }}?user={{ $user->id }}" class="link link-info">グループ詳細へ</a>
        </x-slot>
        <body>
            <div class="navbar bg-base-100 bg-neutral">
                <div class="navbar-start">
                    <h3>メッセージを入力</h3>
                </div>
                <form action="/chats/{{ $group->id }}/{{ $user->id }}" method="POST">
                @csrf
                <div class="create_chat">
                    <div class="join">
                        <div class="insert_chat" class="navbar-center">
                            <input type="text" name="chat[message]" placeholder="メッセージ" value="{{ old('chat.message') }}" class="input input-bordered join-item" />
                            <p class="message_error">{{ $errors->first('chat.message') }}</p>
                        </div>
                        <div class="submit_button">
                             <button value="submit" class="btn join-item rounded-r-full bg-info">送信</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="chats_log">
                @foreach ($chats as $chat)
                <div class="chat_log">
                    @if($chat->user->id == $user->id)
                    <div class="chat chat-end">
                        <div class="chat-header">
                            ME
                            <time class="text-xs opacity-50">{{ $chat->created_at }}</time>
                        </div>
                        <div class="chat-bubble">
                            {{ $chat->message }}
                        </div>
                        <div class="chat-footer opacity-50">
                            <div class="delete">
                                <form action="/chats/{{ $chat->id }}?group={{ $group->id }}&user={{ $user->id }}" id="form_{{ $chat->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button onclic="deleteChat({{ $chat->id }})">送信取り消し</button>
                                </form>
                             </div>
                        </div>
                    </div>
                    @else
                    <div class="chat chat-start">
                        <div class="chat-header">
                            {{ $chat->user->name }}
                            <time class="text-xs opacity-50">{{ $chat->created_at }}</time>
                        </div>
                        <div class="chat-bubble">
                            {{ $chat->message }}
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </body>
    </x-app-layout>
</html>