<?php

$timetable = '';

for($period = 1; $period < 7; $period++){
    $timetable .= '<tr><th class="period">' . $period . '時間目</th>';
    
    for($day_of_week = 0; $day_of_week < 6; $day_of_week++){
        
        foreach($user->lectures as $lecture){
        
            if($lecture->day_of_week  == $day_of_week && $lecture->period == $period){
                $timetable .= '<th><a href="/lectures/' . $lecture->id . '/detail">' . $lecture->name . '</a><br></br><p>' . $lecture->classroom . '</p></th>';
                break;
            }
            
            $timetable .= '<th></th>';
            
        }
    
    }
    $timetable .= '</tr>';

}

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>UUUTA</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">時間割</h1>
        </x-slot>
        <body>
            <div class="timetable">
                <table class="borderd">
                    <div class="day_of_week">
                        <tr>
                            <th></th>
                            <th>月曜日</th>
                            <th>火曜日</th>
                            <th>水曜日</th>
                            <th>木曜日</th>
                            <th>金曜日</th>
                            <th>土曜日</th>
                        </tr>
                    </div>
                    <div class="timetable">
                        <?php
                            echo $timetable;
                        ?>
                    </div>
                </table>
                <a href="/lectures/add/{{ $user->id }}">授業の追加</a>
            </div>    
        </body>
    </x-app-layout>
</html>