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
            <br>
            <div class="add">
                <a href="/tasks/add/{{ $user->id }}" role="button" class="btn">新規課題作成</a>
            </div>
            <div class="list_task">
                @foreach($user->lectures as $lecture)
                    @foreach($lecture->tasks as $task)
                        <br>
                        <div class="card bg-info text-primary-content">
                            <div class="card-body">
                                <h2 class="card-title">{{ $task->name }}</h2>
                                <p>期限：{{ $task->limit }}</p>
                                <a href="/tasks/{{ $task->id }}/detail/{{ $user->id }}" class="trans_detail">課題詳細へ</a>
                                <div class="card-actions justify-end">
                                    <div class="delete">
                                        <form action="/tasks/{{ $task->id }}?user={{ $user->id }}" id="form_{{ $task->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclic="deleteTask({{ $task->id }})">課題の削除</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </body>
    </x-app-layout>
</html>