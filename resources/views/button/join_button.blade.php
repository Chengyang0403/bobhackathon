<div class="cp_iptxt">
@if (Auth::id() != $event->user->id)
    @if ( $event->capacity - $count_joinning >0)
        @if (Auth::user()->is_joining($event->id))
            {!! Form::open(['route' => ['event.cancel', $event->id], 'method' => 'delete']) !!}
                <button type = "sumbit" class="cp_btn3">Cancel</botton>
            {!! Form::close() !!}
   
    
        @else
            {!! Form::open(['route' => ['event.join', $event->id]]) !!}
                <button type = "sumbit" class="cp_btn3">Join</botton>
            {!! Form::close() !!}
        @endif
    @elseif(Auth::user()->is_joining($event->id))
            {!! Form::open(['route' => ['event.cancel', $event->id], 'method' => 'delete']) !!}
                 <button type = "sumbit" class="cp_btn3">Cancel</botton>
            {!! Form::close() !!}
    @endif
@endif
</div>
