@if (Auth::id() == $event->user->id)
        {!! Form::open(['route' => ['events.edit', $event->id], 'method' => 'delete']) !!}
            {!! Form::submit('Cancel', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}

        {!! Form::open(['route' => ['event.join', $event->id]]) !!}
            {!! Form::submit('Join', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
        
@endif
