<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;

class UsersController extends Controller
{
   public function show($id)
   {
        $user = User::find($id);
        $events = [];
        $events = $user->events()->orderBy('created_at', 'desc')->paginate(10);
        $joinnings = $user->joinings()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'user' => $user,
            'events' => $events,
            'joinnings' => $joinnings,
        ];

        //$data += $this->counts($user);

        return view('users.profile', $data);
   }
   public function edit($id)
   {
       $user = User::find($id);
      
       return view('users.edit', [
           'user' => $user, 
        ]);
   }
   public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->intro =$request->intro;
        $user->save();
        
        $user = User::find($id);
        $events = $user->events()->orderBy('created_at', 'desc')->paginate(10);
        $joinnings = $user->joinings()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'user' => $user,
            'events' => $events,
            'joinnings' => $joinnings,
        ];
        
        return view('users.profile', $data);
        
    }
}
