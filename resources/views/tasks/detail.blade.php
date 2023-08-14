<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>課題の詳細</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">課題詳細</h1>
        </x-slot>
        <body>
            <div class="detail">
                <h1>授業名：{{ $task->lecture->name }}</h1>
                <div class="detail_name">
                    <p>課題名：{{ $task->name }}</p>
                </div>
                <div class="detail_limit">
                    <p>提出期限：{{ $task->limit }}</p>
                </div>
            </div>
            <div class="edit">
                <a href="/tasks/{{ $task->id }}/edit" class="task_edit">課題内容を編集</a>
            </div>
        </body>
    </x-app-layout>
</html>