<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = [
        'event_name', 'user_id','genre', 'date','time', 'place', 'capacity', 'comment', 'due',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function joined()
    {
        return $this->belongsToMany(User::class, 'user_join', 'event_id', 'user_id')->withTimestamps();
    }
    public function bulletins()
    {
        return $this->hasMany(Bulletin::class);
    }

}
