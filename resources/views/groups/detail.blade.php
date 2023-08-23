<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>グループ詳細</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <div class="title">
                <h1>グループ名：{{ $group->name }}</h1>
                <h1>グループID：{{ $group->id }}</h1>
                <h1>パスワード：{{ $group->password }}</h1>
            </div>
        </x-slot>
        <body>
            <h3>メンバー一覧</h3>
            <div class="index_member">
                @foreach( $group->users as $user )
                    <p class="user_name">{{ $user->name }}</p>
                @endforeach
            </div>
            <div class="delete">
                <form action="/groups/{{ $group->id }}?user={{ $_GET['user'] }}" id="form_{{ $group->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclic="deleteGroup({{ $group->id }})">グループから抜ける</button>
                </form> 
            </div>
        </body>
    </x-app-layout>
</html>