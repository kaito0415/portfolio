<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>課題一覧</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">課題一覧</h1>
        </x-slot>
        <body>
            <div class="list_task">
                @foreach($tasks as $task)
                    <h3 class="Task_name">{{ $task->name }}</h3>
                    <a href="/tasks/{{ $task->id }}/detail" class="trans_detail">課題詳細へ</a>
                @endforeach
            </div>
            <div class="add">
                <a href="/taksk/add">新規課題作成</a>
            </div>
        </body>
    </x-app-layout>
</html>