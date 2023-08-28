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
            <div class="overflow-x-auto h-96">
                <table class="table table-pin-rows">
                    <thead>
                        <tr>
                            <th class="bg-info">メンバー一覧</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="index_member">
                            @foreach( $group->users as $user )
                                <tr><td>{{ $user->name }}</td></tr>
                            @endforeach
                        </div>
                    </tbody>
                </table>
            </div>
            <div class="delete">
                <form action="/groups/{{ $group->id }}?user={{ $_GET['user'] }}" id="form_{{ $group->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclic="deleteGroup({{ $group->id }})" class="btn btn-info">グループから抜ける</button>
                </form> 
            </div>
        </body>
    </x-app-layout>
</html>