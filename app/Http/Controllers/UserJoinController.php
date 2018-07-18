<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;

class UserJoinController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->join($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->cancel($id);
        return redirect()->back();
    }
    
   
}
