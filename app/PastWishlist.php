<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastWishlist extends Model
{
    protected $table = 'past_wishlists';
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
