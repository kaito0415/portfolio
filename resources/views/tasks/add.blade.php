<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>課題の追加</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">課題の追加</h1>
        </x-slot>
        <body>
            <form action="/tasks" method="POST">
                @csrf
                <div class="select_lecture">
                    <h3>授業の選択</h3>
                    <select name="task[lecture_id]">
                        <option value="" selected hidden>選択してください</option>
                        @foreach($lectures as $lecture)
                            @if("null !== old('task.lecture_id')" && old('task.lecture_id') == $lecture->id)
                            <option value="{{ $lecture->id }}" selected>{{ $lecture->name }}</option>
                            @else
                            <option value="{{ $lecture->id }}">{{ $lecture->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <p class="lecture_id_error">{{ $errors->first('task.lecture_id') }}</p>
                </div>
                <div class="create_name">
                    <h3>課題名</h3>
                    <div class="insert_name">
                        <input type="text" name="task[name]" placeholder="課題名" value="{{ old('task.name') }}" />
                        <p class="name_error">{{ $errors->first('task.name') }}</p>
                    </div>
                </div>
                <div class="create_limit">
                    <h3>期限</h3>
                    <div class="insert_limit">
                        <input type="datetime-local" name="task[limit]" value="{{ old('task.limit') }}" />
                        <p class="name_error">{{ $errors->first('task.name') }}</p>
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>