<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>グループ参加</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            <h1 class="title">グループへの参加</h1>
            @isset($_GET['miss'])
                <p>※グループIDまたはパスワードが違います</p>
            @endisset
        </x-slot>
        <body>
            <form action="/groups/check?user={{ $user->id }}" method="POST">
                @csrf
                <div class="create_group_id">
                    <h3>参加するグループのIDを入力</h3>
                    <div class="insert_group_id">
                        <input type="text" name="entry_id" placeholder="グループID" />
                    </div>
                </div>
                <div class="create_password">
                    <h3>グループのパスワードを入力</h3>
                    <div class="insert_password">
                        <input type="text" name="entry_password" placeholder="パスワード入力" />
                    </div>
                </div>
                <div class="confirm_button">
                    <button value="submit">送信</button>
                </div>
            </form>
        </body>
    </x-app-layout>
</html>