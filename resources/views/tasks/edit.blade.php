<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>課題の追加</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">課題の編集</h1>
        </x-slot>
        <body>
            <form action="/tasks/{{ $task->id }}?user={{ $user->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="select_lecture">
                    <h3>授業の選択</h3>
                    <select name="task[lecture_id]" class="select select-info w-full max-w-xs">
                        <option value="" selected hidden>選択してください</option>
                        @foreach($user->lectures as $lecture)
                            @if(old('task.lecture_id') == $lecture->id)
                            <option value="{{ $lecture->id }}" selected>{{ $lecture->name }}</option>
                            @elseif(empty(old('task.lecture_id')) && $lecture->id == $task->lecture_id)
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
                        @if(!empty(old('task.name')))
                        <input type="text" name="task[name]" placeholder="課題名" value="{{ old('task.name') }}" class="input input-bordered input-info w-full max-w-xs" />
                        @else
                        <input type="text" name="task[name]" placeholder="課題名" value="{{ $task->name }}" class="input input-bordered input-info w-full max-w-xs" />
                        @endif
                        <p class="name_error">{{ $errors->first('task.name') }}</p>
                    </div>
                </div>
                <div class="create_limit">
                    <h3>期限</h3>
                    <div class="insert_limit">
                        @if(!empty(old('task.limit')))
                        <input type="datetime-local" name="task[limit]" value="{{ old('task.limit') }}" class="select select-info w-full max-w-xs" />
                        @else
                        <input type="datetime-local" name="task[limit]" value="{{ $task->limit }}" class="select select-info w-full max-w-xs" />
                        @endif
                        <p class="name_error">{{ $errors->first('task.name') }}</p>
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit" class="btn btn-info btn-sm">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>