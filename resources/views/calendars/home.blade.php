<?php

if(isset($_GET['ym'])){
    $ym = $_GET['ym'];
} else {
    $ym =date('Y-m');
}

$timestamp = strtotime($ym . '-01');
if($timestamp === false){
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

$today = date('Y-m-j');

$html_title = date('Y年n月', $timestamp);

$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

$day_count = date('t', $timestamp);

$dow = date('w', $timestamp);

$weeks = [];
$week = '';

$week .= str_repeat('<td></td>', $dow);

for($day = 1; $day <= $day_count; $day++, $dow++){
    $date = $ym . '-' . $day;
    
    if($today == $date){
        $week .= '<td class="today">' . $day;
    } else{
        $week .= '<td>' . $day;
    }
    
    $week .= '</td>';
    
    if($dow % 7 == 6 || $day == $day_count){
        
        if($day == $day_count){
        $week .=str_repeat('<td></td>', 6 - $dow % 7);
        }
        
        $weeks[] = '<tr>' . $week . '</tr>';
        $week = '';
    
    }
    
}


?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>カレンダー</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            
        </x-slot>
        <body>
            <div class="select_year_month">
                <h3 class="trans_month"><a href="?ym=<?php echo $prev; ?>">&lt;</a><?php echo $html_title; ?><a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
            </div>
            <div class="day">
                <table class="borderd">
                    <tr>
                        <th>日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>日</th>
                    </tr>
                    <?php
                        foreach($weeks as $week) {
                            echo $week;
                        }
                    ?>
                </table>
            </div>
        </body>
    </x-app-layout>
</html>