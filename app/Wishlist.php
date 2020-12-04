<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    protected $fillable = [
        'user_id',
        'event_id'
    ];
     public function users()
     {
         return $this->belongsTo('App\User');
     }

     public function events()
     {
         return $this->belongsToMany('App\Event');
     }
}
