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
            <div class="detail" class="card w-96 text-primary-content">
                <div class="card-body">
                    <h2 class="card-title">{{ $task->name }}</h2>
                    <div class="detail-lecture">
                        <p>授業名：{{ $task->lecture->name }}</p>
                    </div>
                    <div class="detail_limit">
                        <p>期限：{{ $task->limit }}</p>
                    </div>
                    <div class="card-actions justify-end">
                        <a href="/tasks/{{ $task->id }}/edit/{{ $user->id }}" class="task_edit">課題内容を編集</a>
                    </div>
                </div>
            </div>
        </body>
    </x-app-layout>
</html>