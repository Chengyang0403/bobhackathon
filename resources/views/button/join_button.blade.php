@if (Auth::id() != $event->user->id)
    @if ( $event->capacity - $count_joinning >0)
        @if (Auth::user()->is_joining($event->id))
            {!! Form::open(['route' => ['event.cancel', $event->id], 'method' => 'delete']) !!}
                {!! Form::submit('Cancel', ['class' => "btn btn-danger btn-block"]) !!}
            {!! Form::close() !!}
   
    
        @else
            {!! Form::open(['route' => ['event.join', $event->id]]) !!}
                {!! Form::submit('Join', ['class' => "btn btn-primary btn-block"]) !!}
            {!! Form::close() !!}
        @endif
    @elseif(Auth::user()->is_joining($event->id))
            {!! Form::open(['route' => ['event.cancel', $event->id], 'method' => 'delete']) !!}
                {!! Form::submit('Cancel', ['class' => "btn btn-danger btn-block"]) !!}
            {!! Form::close() !!}
    @endif
@endif
