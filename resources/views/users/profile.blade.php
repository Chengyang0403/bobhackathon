@extends('layouts.app')

@section('content')
   @if (Auth::check())
    
    <h1>{{ $user->username}} の詳細ページ</h1>
    <p>ユーザー名:{{ $user->username }}</p>
    <p>性別:{{ $user->gender }}</p>
    <p>自己紹介:{{ $user->intro }}</p>
    
    
   @if (Auth::id() == $user->id)
    {!! link_to_route('users.edit', '自己紹介を編集', ['username' => $user->id], ['class' => 'btn btn-lg btn-primary'] ) !!} 
   @endif


    @foreach($events as $event)
    <ul>
        <h1>ホスト一覧</h1>
        <li>{{ $event->event_name }} </li>
            {!! link_to_route('events.show', '詳細を見る', ['event_name' => $event->id], ['class' => 'btn btn-lg btn-primary'] ) !!} 
    </ul>
    @endforeach
    
    @foreach($joinnings as $joinning)
    <h1>Join一覧</h1>
        <li> {{ $joinning->event_name }} </li>
            {!! link_to_route('events.show', '詳細を見る', ['event_name' => $joinning->id], ['class' => 'btn btn-lg btn-primary'] ) !!} 
    @endforeach
   @endif
   
@endsection
