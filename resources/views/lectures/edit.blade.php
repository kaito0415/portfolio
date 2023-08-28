<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>授業の編集</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">授業の編集</h1>
            <h1 class="time_of_week">{{ $day_of_week }}{{ $_GET['p'] }}時間目</h1>
        </x-slot>
        <body>
            <form action="/lectures/{{ $lecture->id }}?user={{ $_GET['user'] }}" method="POST">
                @csrf
                @method('PUT')
                <div class="create_name">
                    <h3>授業名</h3>
                    <div class="insert_name">
                        @if(!empty(old('lecture.name')))
                        <input type="text" name="lecture[name]" placeholder="授業名" value="{{ old('lecture.name') }}" class="input input-bordered input-info w-full max-w-xs" />
                        @else
                        <input type="text" name="lecture[name]" placeholder="授業名" value="{{ $lecture->name }}" class="input input-bordered input-info w-full max-w-xs" />
                        @endif
                        <p class="name_error">{{ $errors->first('lecture.name') }}</p>
                    </div>
                </div>
                <div class="create_classroom">
                    <h3>教室名入力</h3>
                    <div class="insert_classroom">
                        @if(!empty(old('lecture.classroom')))
                        <input type="text" name="lecture[classroom]" placeholder="教室名" value="{{ old('lecture.classroom') }}" class="input input-bordered input-info w-full max-w-xs" />
                        @else
                        <input type="text" name="lecture[classroom]" placeholder="教室名" value="{{ $lecture->classroom }}" class="input input-bordered input-info w-full max-w-xs" />
                        @endif
                        <p class="classroom_error">{{ $errors->first('lecture.classroom') }}</p>
                    </div>
                </div>
                <div class="create_teacher">
                    <h3>教員名入力</h3>
                    <div class="insert_teacher">
                        @if(!empty(old('lecture.classroom')))
                        <input type="text" name="lecture[teacher]" placeholder="教員名" value="{{ $lecture->teacher }}" class="input input-bordered input-info w-full max-w-xs" />
                        @else
                        <input type="text" name="lecture[teacher]" placeholder="教員名" value="{{ $lecture->teacher }}" class="input input-bordered input-info w-full max-w-xs" />
                        @endif
                        <p class="teacher_error">{{ $errors->first('lecture.teacher') }}</p>
                    </div>
                </div>
                 <div class="create_credit">
                    <h3>単位数入力</h3>
                    <div class="insert_credit">
                        <select name="lecture[credit]" class="select select-info w-full max-w-xs">
                            @for($i = 0; $i < 11; $i++)
                            @if(empty(old('lecture.credit')) && $i == $lecture->credit)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @elseif(old('lecture.credit') == $i)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                            @else
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endif
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit" class="btn btn-info btn-sm">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>