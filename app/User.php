<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password','gender', 'intro',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    
    public function bulletins()
    {
        return $this->hasMany(Bulletin::class);
    }
    
    public function joinings()
    {
        return $this->belongsToMany(Event::class, 'user_join', 'user_id', 'event_id')->withTimestamps();
    }
    
    public function join($eventId)
 	{
 	    $exist = $this->is_joining($eventId);
	    if ($exist) {
		    return false;
	    }else{
		    $this->joinings()->attach($eventId);
		    return true;
	    }
	}
	
    public function cancel($eventId)
   {
    
    $exist = $this->is_joining($eventId);
    
    
    if ($exist) {
        $this->joinings()->detach($eventId);
        return true;
    } 
    
    else {
        return false;
    }
   
       
   }
   
  public function is_joining($eventId) {
    return $this->joinings()->where('event_id', $eventId)->exists();
  }
  
  
  
}

