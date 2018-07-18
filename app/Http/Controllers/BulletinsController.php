<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Bulletin;
class BulletinsController extends Controller
{
    

    public function store(Request $request)
    {
         $this->validate($request, [
            'bulletin' => 'required',
        ]);
        
        $bulletin = new Bulletin;
        $bulletin->event_id = $request->event_id;
        $bulletin->bulletin = $request->bulletin;
        $bulletin->user_id = $request->user_id;
        $bulletin->save();
        
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $bulletin = \App\Bulletin::find($id);

        if (\Auth::id() === $bulletin->user_id) {
            $bulletin->delete();
        }

        return redirect()->back();
    }

}
