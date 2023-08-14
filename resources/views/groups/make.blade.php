<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>グループ作成</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">グループ作成</h1>
        </x-slot>
        <body>
            <form action="/groups" method="POST">
                @csrf
                <div class="create_name">
                    <h3>グループ名</h3>
                    <div class="insert_name">
                        <input type="text" name="group[name]" placeholder="グループ名" />
                    </div>
                <div class="submit_button">
                    <button value="submit">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>