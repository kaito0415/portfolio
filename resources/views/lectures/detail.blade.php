<?php

switch($lecture->day_of_week){
    case 0:
        $day_of_week = '月曜日';
        break;
    case 1:
        $day_of_week = '火曜日';
        break;
    case 2:
        $day_of_week = '水曜日';
        break;
    case 3:
        $day_of_week = '木曜日';
        break;
    case 4:
        $day_of_week = '金曜日';
        break;
    case 5:
        $day_of_week = '土曜日';
        break;
}
    

?>
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
                    <p><?php echo $day_of_week ?></p>
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