<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>授業の編集</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            
        </x-slot>
        <body>
            <h1 class="title">授業の編集</h1>
            <form action="/lectures/{{ $lecture->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="create_name">
                    <h3>授業名</h3>
                    <div class="insert_name">
                        <input type="text" name="lecture[name]" placeholder="授業名" value="{{ $lecture->name }}" />
                    </div>
                </div>
                <div class="create_period">
                    <h3>時限数入力</h3>
                    <div class="insert_period">
                        <select name="lecture[period]" value="{{ $lecture->period }}">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="create_day_of_week">
                    <h3>曜日選択</h3>
                    <div class="isert_day_of_week">
                        <select name="lecture[day_of_week]" value="{{ $lecture->day_of_week }}">
                            <option value="0">月曜日</option>
                            <option value="1">火曜日</option>
                            <option value="2">水曜日</option>
                            <option value="3">木曜日</option>
                            <option value="4">金曜日</option>
                            <option value="5">土曜日</option>
                        </select>
                    </div>
                </div>
                <div class="create_classroom">
                    <h3>教室名入力</h3>
                    <div class="insert_classroom">
                        <input type="text" name="lecture[classroom]" placeholder="教室名" value="{{ $lecture->classroom }}" />
                    </div>
                </div>
                <div class="create_teacher">
                    <h3>教員名入力</h3>
                    <div class="insert_teacher">
                        <input type="text" name="lecture[teacher]" placeholder="教員名" value="{{ $lecture->teacher }}" />
                    </div>
                </div>
                 <div class="create_credit">
                    <h3>単位数入力</h3>
                    <div class="insert_credit">
                        <select name="lecture[credit]" value="{{ $lecture->credit }}">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>