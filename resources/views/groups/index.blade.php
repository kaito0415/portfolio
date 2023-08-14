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
                @foreach($groups as $group)
                    <h3 class="group_name">{{ $group->name }}</h3>
                    <a href="/groups/{{ $group->id }}/chat" class="trans_chat">{{ $group->name }}のチャットへ</a>
                @endforeach
            </div>
            <div class="add">
                <a href="/groups/name">新規グループ作成</a>
            </div>
        </body>
    </x-app-layout>
</html>