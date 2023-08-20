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
                    <a href="/groups/{{ $group->id }}/chat/{{ $user->id }}" class="trans_chat">チャットへ</a>
                    <a href="/groups/{{ $group->id }}/edit/{{ $user->id }}" class="trans_edit">グループ情報の修正</a>
                @endforeach
            </div>
            <div class="trans_add">
                <a href="/groups/make/{{ $user->id }}">新規グループ作成</a>
            </div>
            <div class="trans_entry">
                <a href="/groups/entry/{{ $user->id }}">グループに参加する</a>
            </div>
        </body>
    </x-app-layout>
</html>