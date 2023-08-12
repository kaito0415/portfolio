<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>グループ名編集</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            
        </x-slot>
        <body>
            <h1 class="title">グループ名変更</h1>
            <form action="/groups/{{ $group->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="create_name">
                    <h3>グループ名</h3>
                    <div class="insert_name">
                        <input type="text" name="group[name]" placeholder="グループ名" value="{{ $group->name }}" />
                    </div>
                <div class="submit_button">
                    <button value="submit">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>