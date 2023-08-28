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
            <br>
            <div class="join">
                <div class="trans_add">
                    <a href="/groups/make/{{ $user->id }}" role="button" class="btn">新規グループ作成</a>
                </div>
                <div class="trans_entry">
                    <a href="/groups/entry/{{ $user->id }}" role="button" class="btn">グループに参加する</a>
                </div>
            </div>
            <div class="list_group">
                @foreach($user->groups as $group)
                <br>
                <div class="card bg-info text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title">{{ $group->name }}</h2>
                        <a href="/groups/{{ $group->id }}/chat/{{ $user->id }}" class="trans_chat">チャットへ</a>
                        <div class="card-actions justify-end">
                            <a href="/groups/{{ $group->id }}/edit/{{ $user->id }}" class="trans_edit">グループ情報の修正</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </body>
    </x-app-layout>
</html>