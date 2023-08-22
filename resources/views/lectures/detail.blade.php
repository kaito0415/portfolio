<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>授業の詳細</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">授業の詳細</h1>
            <h1 class="time_of_week">{{ $day_of_week }}{{ $lecture->period }}時間目</h1>
        </x-slot>
        <body>
            <h1 class="name">
                {{ $lecture->name }}
            </h1>
            <div class="detail">
                <div class="detail_classroom">
                    <p>{{ $lecture->classroom }}</p>
                </div>
                <div class="detail_teacher">
                    <p>{{ $lecture->teacher }}</p>
                </div>
                <div class="detail_credit">
                    <p>{{ $lecture->credit }}単位</p>
                </div>
                <div class="detail_id">
                    <p>授業ID：{{ $lecture->id }}</p>
                </div>
            </div>
            <div class="edit">
                <a href="/lectures/{{ $lecture->id }}/edit?user={{ $_GET['user'] }}&p={{ $lecture->period }}&d={{ $lecture->day_of_week }}" class="lecture_edit">授業内容の編集</a>
            </div>
            <div class="delete">
                <form action="/lectures/{{ $lecture->id }}?user={{ $_GET['user'] }}" id="form_{{ $lecture->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="deletePost({{ $lecture->id }})">授業の削除</button> 
                </form>
            </div>
        </body>
    </x-app-layout>
</html>