<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>グループ作成</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">グループ作成</h1>
        </x-slot>
        <body>
            <form action="/groups/{{ $user->id }}" method="POST">
                @csrf
                <div class="create_name">
                    <h3>グループ名</h3>
                    <div class="insert_name">
                        <input type="text" name="group[name]" placeholder="グループ名" value="{{ old('group.name') }}" class="input input-bordered input-info w-full max-w-xs" />
                        <p class="name_error">{{ $errors->first('group.name') }}</p>
                    </div>
                </div>
                <div class="create_password">
                    <h3>パスワードを決定</h3>
                    <div class="insert_password">
                        <input type="text" name="group[password]" placeholder="パスワード" value="{{ old('group.password') }}" class="input input-bordered input-info w-full max-w-xs" />
                        <p class="password_error">{{ $errors->first('group.password') }}</p>
                    </div>
                </div>
                <div class="submit_button">
                    <button value="submit" class="btn btn-info btn-sm">保存</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>