<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>授業の追加</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">授業の追加</h1>
        </x-slot>
        <body>
            <form action="/lectures/{{ $user->id }}?p={{ $_GET['p'] }}&d={{ $_GET['d'] }}" method="POST">
                @csrf
                <div class="create_name">
                    <h3>授業名</h3>
                    <div class="insert_name">
                        <input type="text" name="lecture[name]" placeholder="授業名" />
                    </div>
                </div>
                <div class="create_classroom">
                    <h3>教室名入力</h3>
                    <div class="insert_classroom">
                        <input type="text" name="lecture[classroom]" placeholder="教室名" />
                    </div>
                </div>
                <div class="create_teacher">
                    <h3>教員名入力</h3>
                    <div class="insert_teacher">
                        <input type="text" name="lecture[teacher]" placeholder="教員名" />
                    </div>
                </div>
                 <div class="create_credit">
                    <h3>単位数入力</h3>
                    <div class="insert_credit">
                        <select name="lecture[credit]">
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