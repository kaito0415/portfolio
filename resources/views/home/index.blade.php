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
                        <div class="first_period">
                            <tr>
                                <th>１時間目</th>
                                @for($i = 0; $i < 6; $i++)
                                    @forelse($first_lectures as $first_lecture)
                                        @if($first_lecture->day_of_week == $i)
                                            <th>
                                                <a href="/lectures/{{ $first_lecture->id }}/detail">{{ $first_lecture->name }}</a>
                                                <br/>
                                                <p>{{ $first_lecture->classroom }}</p>
                                            </th>
                                            @break
                                        @elseif($loop->last)
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=1&d={{ $i }}">授業の追加</a>
                                        </th>
                                        @endif
                                    @empty
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=1&d={{ $i }}">授業の追加</a>
                                        </th>
                                    @endforelse
                                @endfor
                            </tr>
                        </div>
                        <div class="first_period">
                            <tr>
                                <th>２時間目</th>
                                @for($i = 0; $i < 6; $i++)
                                    @forelse($second_lectures as $second_lecture)
                                        @if($second_lecture->day_of_week == $i)
                                            <th>
                                                <a href="/lectures/{{ $second_lecture->id }}/detail">{{ $second_lecture->name }}</a>
                                                <br/>
                                                <p>{{ $second_lecture->classroom }}</p>
                                            </th>
                                            @break
                                        @elseif($loop->last)
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=2&d={{ $i }}">授業の追加</a>
                                        </th>
                                        @endif
                                    @empty
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=2&d={{ $i }}">授業の追加</a>
                                        </th>
                                    @endforelse
                                @endfor
                            </tr>
                        </div>
                        <div class="first_period">
                            <tr>
                                <th>３時間目</th>
                                @for($i = 0; $i < 6; $i++)
                                    @forelse($third_lectures as $third_lecture)
                                        @if($third_lecture->day_of_week == $i)
                                            <th>
                                                <a href="/lectures/{{ $third_lecture->id }}/detail">{{ $third_lecture->name }}</a>
                                                <br/>
                                                <p>{{ $third_lecture->classroom }}</p>
                                            </th>
                                            @break
                                        @elseif($loop->last)
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=3&d={{ $i }}">授業の追加</a>
                                        </th>
                                        @endif
                                    @empty
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=3&d={{ $i }}">授業の追加</a>
                                        </th>
                                    @endforelse
                                @endfor
                            </tr>
                        </div>
                        <div class="first_period">
                            <tr>
                                <th>４時間目</th>
                                @for($i = 0; $i < 6; $i++)
                                    @forelse($fourth_lectures as $fourth_lecture)
                                        @if($fourth_lecture->day_of_week == $i)
                                            <th>
                                                <a href="/lectures/{{ $fourth_lecture->id }}/detail">{{ $fourth_lecture->name }}</a>
                                                <br/>
                                                <p>{{ $fourth_lecture->classroom }}</p>
                                            </th>
                                            @break
                                        @elseif($loop->last)
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=4&d={{ $i }}">授業の追加</a>
                                        </th>
                                        @endif
                                    @empty
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=4&d={{ $i }}">授業の追加</a>
                                        </th>
                                    @endforelse
                                @endfor
                            </tr>
                        </div>
                        <div class="first_period">
                            <tr>
                                <th>５時間目</th>
                                @for($i = 0; $i < 6; $i++)
                                    @forelse($fifth_lectures as $fifth_lecture)
                                        @if($fifth_lecture->day_of_week == $i)
                                            <th>
                                                <a href="/lectures/{{ $fifth_lecture->id }}/detail">{{ $fifth_lecture->name }}</a>
                                                <br/>
                                                <p>{{ $fifth_lecture->classroom }}</p>
                                            </th>
                                            @break
                                        @elseif($loop->last)
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=5&d={{ $i }}">授業の追加</a>
                                        </th>
                                        @endif
                                    @empty
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=5&d={{ $i }}">授業の追加</a>
                                        </th>
                                    @endforelse
                                @endfor
                            </tr>
                        </div>
                        <div class="first_period">
                            <tr>
                                <th>６時間目</th>
                                @for($i = 0; $i < 6; $i++)
                                    @forelse($sixth_lectures as $sixth_lecture)
                                        @if($sixth_lecture->day_of_week == $i)
                                            <th>
                                                <a href="/lectures/{{ $sixth_lecture->id }}/detail">{{ $sixth_lecture->name }}</a>
                                                <br/>
                                                <p>{{ $sixth_lecture->classroom }}</p>
                                            </th>
                                            @break
                                        @elseif($loop->last)
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=6&d={{ $i }}">授業の追加</a>
                                        </th>
                                        @endif
                                    @empty
                                        <th>
                                            <a href="/lectures/add/{{ $user->id }}?p=6&d={{ $i }}">授業の追加</a>
                                        </th>
                                    @endforelse
                                @endfor
                            </tr>
                        </div>
                    </div>
                </table>
            </div>    
        </body>
    </x-app-layout>
</html>