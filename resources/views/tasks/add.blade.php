<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>課題の追加</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            
        </x-slot>
        <body>
            <h1 class="title">課題の追加</h1>
            <form action="/tasks" method="POST">
                @csrf
                <div class="create_name">
                    <h3>課題名</h3>
                    <div class="insert_name">
                        <input type="text" name="task[name]" placeholder="課題名" />
                    </div>
                </div>
                <div class="create_limit">
                    <h3>期限</h3>
                    <div class="insert_limit">
                        <input type="datetime-local" name="task[limit]" />
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>