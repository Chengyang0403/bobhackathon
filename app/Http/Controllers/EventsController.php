<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Bulletin;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::paginate(15);
        
     
        
        return view('events.index', [
            'events' => $events,
        
            
        ]);
    }  

     public function create()
    {
        $event = new Event;

        return view('events.create', [
            'event' => $event,
        ]);

    }
    
    public function edit($id)
    {
        $event = Event::find($id);

        return view('events.edit', [
            'event' => $event,
        ]);
    }
    
   public function store(Request $request)
    {
        $this->validate($request, [
            'event_name' => 'required|max:60',
            'genre' => 'required|max:60',
            'date' => 'required',
            'time' => 'required',
            'place' => 'required|max:30',
            'capacity' => 'required|integer',
            'comment' => 'required',
            'due' => 'required',
        ]);

        $request->user()->events()->create([
            'event_name' => $request->event_name,
            'genre' => $request->genre,
            'date' => $request->date,
            'time' => $request->time,
            'place' => $request->place,
            'capacity' => $request->capacity,
            'comment' => $request->comment,
            'due' => $request->due,
        ]);

        
        return redirect('/');
    }
    
    
    public function destroy($id)
    {
        $event = \App\Event::find($id);

        if (\Auth::id() === $event->user_id) {
            $event->delete();
        }

        return redirect('/');
    }
    
    // "Acquisition display process" when accessing `messages/id` with GET
    
    public function show($id)
    {
        $event = Event::find($id);
        $bulletins = $event->bulletins()->paginate(10);
        $joinners = $event->joined()->paginate(10);
        $count_joinning = $event->joined()->count();

        $data = [
            'event' => $event,
            'joinners' => $joinners,
            'count_joinning' => $count_joinning,
            'bulletins' => $bulletins,
        ];

        //$data += $this->counts($user);

        return view('events.show', $data);
         }
  
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->event_name = $request->event_name;
        $event->genre = $request->genre;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->place = $request->place;
        $event->capacity = $request->capacity;
        $event->comment = $request->comment;
        $event->due = $request->due;
        $event->save();
        
        $bulletins = $event->bulletins()->paginate(10);
        $joinners = $event->joined()->paginate(10);
        $count_joinning = $event->joined()->count();

        return view('events.show',[
        'event' =>$event,
        'bulletins' => $bulletins,
        'joinners' => $joinners,
        'count_joinning' => $count_joinning,
        ]);
    }


    
}
