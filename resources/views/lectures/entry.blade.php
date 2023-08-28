<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>授業参加</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">授業への参加</h1>
            <h1 class="time_of_week">{{ $day_of_week }}{{ $_GET['p'] }}時間目</h1>
            @isset($_GET['miss'])
                <p>※授業IDまたは曜日または時間が違い違います</p>
            @endisset
        </x-slot>
        <body>
            <form action="/lectures/check?user={{ $user->id }}&p={{ $_GET['p'] }}&d={{ $_GET['d'] }}" method="POST">
                @csrf
                <div class="create_lecture_id">
                    <h3>追加する授業のIDを入力</h3>
                    <div class="insert_group_id">
                        <input type="text" name="entry_id" placeholder="授業ID" class="input input-bordered input-info w-full max-w-xs" />
                    </div>
                </div>
                <div class="confirm_button">
                    <button value="submit" class="btn btn-info btn-sm">追加</button>
                </div>
                <div class="return_add">
                    <a href="/lectures/add/{{ $user->id }}?p={{ $_GET['p'] }}&d={{ $_GET['d'] }}" class="link link-info">授業追加へ戻る</a>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>