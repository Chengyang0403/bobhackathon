@extends('layouts.app')

@section('content')
    @if (Auth::check()) 
    
    <h1>{{ $event->event_name}} の詳細ページ</h1>

    <p>イベント名: {{ $event->event_name }}</p>
    <p>ジャンル: {{ $event->genre }}</p>
    <p>内容: {{ $event->comment }}</p>
    <p>ホスト名:{!! link_to_route('users.profile', $event->user->username, ['username' => $event->user->id]) !!}</p>
    <p>場所: {{ $event->place }}</p>
    <p>日時: {{ $event->date }} {{ $event->time }}</p>
    <p>募集人数: {{ $event->capacity }}</p>
    <p>募集締め切り: {{ $event->due }}</p>
   
    
    　
    <p>残り人数: <?php echo ($event->capacity - $count_joinning);?></p>

    @foreach($joinners as $joinner)
    <ul>
        <li>{!! link_to_route('users.profile', $joinner->username, ['username' => $joinner->id]) !!}</li>
    </ul>
    @endforeach


   @endif
    @include('button.join_button', ['event' => $event])



    @if (Auth::id() == $event->user->id)
        {!! link_to_route('events.edit', 'このイベントを編集', ['id' => $event->id]) !!}
        {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
         {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
        {!! Form::close() !!}
    @endif
    
    
    <!---コメント投稿-->
    {!! Form::open(['route' => 'bulletins.store']) !!}
        <div class="form-group">
            {!! Form::label('bulletin', 'コメントする！') !!}
            {!! Form::textarea('bulletin', old('bulletin'), ['class' => 'form-control', 'rows' => '2']) !!}
            {!! Form::hidden('event_id', $event->id) !!}
            {!! Form::hidden('user_id', Auth::id()) !!}
            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
    {!! Form::close() !!}
    @foreach($bulletins as $bulletin)
    <!---コメント削除-->
    
    <ul>
        <li>{{ $bulletin->user->username}}
            <p>{{ $bulletin->bulletin }}</p>
            @if (Auth::id() == $bulletin->user_id)
                {!! Form::open(['route' => ['bulletins.destroy', $bulletin->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => "btn btn-danger btn-xs"]) !!}
                {!! Form::close() !!}
            @endif
        </li>
    </ul>
    @endforeach
    {!! $bulletins->render() !!}
    
    
    
@endsection