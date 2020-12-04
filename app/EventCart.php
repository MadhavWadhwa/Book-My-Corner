<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCart extends Model

{

    protected $table = 'event_carts';
    protected $fillable = ['name' , 'date', 'location','no_of_tickets','price','user_id'];


    public function events(){
        return $this->hasMany('App\Event');
    }

        public function users(){
            return $this->belongsTo('App\User');
        }
}
