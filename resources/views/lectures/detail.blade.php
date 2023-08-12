<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>授業の詳細</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            
        </x-slot>
        <body>
            <h1 class="name">
                {{ $lecture->name }}
            </h1>
            <div class="detail">
                <div class="detail_period">
                    <p>{{ $lecture->period }}時限目</p>
                </div>
                <div class="detail_day_of_week">
                    <p>{{ $lecture->period }}</p>
                </div>
                <div class="detail_classroom">
                    <p>{{ $lecture->classroom }}</p>
                </div>
                <div class="detail_credit">
                    <p>{{ $lecture->credit }}単位</p>
                </div>
            </div>
            <div class="edit">
                <a href="/lectures/{{ $lecture->id }}/edit" class="lecture_edit">授業内容の編集</a>
            </div>
        </body>
    </x-app-layout>
</html>