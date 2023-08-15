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
                @foreach($user->lectures as $lecture)
                    @foreach($lecture->tasks as $task)
                        <h3 class="task_name">{{ $task->name }}  期限：{{ $task->limit }}</h3>
                        <a href="/tasks/{{ $task->id }}/detail" class="trans_detail">課題詳細へ</a>
                    @endforeach
                @endforeach
            </div>
            <div class="add">
                <a href="/tasks/add">新規課題作成</a>
            </div>
        </body>
    </x-app-layout>
</html>