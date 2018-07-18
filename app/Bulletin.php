<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;
class Bulletin extends Model
{
    protected $fillable = ['bulletin', 'event_id', 'user_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
