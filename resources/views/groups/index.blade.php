<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>グループ一覧</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">グループ一覧</h1>
        </x-slot>
        <body>
            <div class="list_group">
                @foreach($user->groups as $group)
                    <h3 class="group_name">{{ $group->name }}</h3>
                    <p href="/groups/{{ $group->id }}/chat/{{ $user->id }}" class="trans_chat">チャットへ</p>
                    <p href="/groups/{{ $group->id }}/edit/{{ $user->id }}" class="trans_edit">グループ名の修正</p>
                @endforeach
            </div>
            <div class="add">
                <a href="/groups/make/{{ $user->id }}">新規グループ作成</a>
            </div>
        </body>
    </x-app-layout>
</html>