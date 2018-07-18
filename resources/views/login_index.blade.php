@extends('layouts.app')
@section('content')
    @foreach($events as $event)
     <tr>
         <td>{{ $event->user_id }}</td>
         <td>{{ $event->event_name }}</td>
         <td>{{ $event->datetime }}</td>
         <td>{{ $event->genre }}</td>
     </tr>
    @endforeach
    
{!! link_to_route('logout.get', 'Logout!', null, ['class' => 'btn btn-lg btn-primary']) !!}

@endsection




