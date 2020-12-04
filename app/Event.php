<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Event extends Model
{
    use ValidatingTrait;
    protected $table = 'events';
    protected $fillable = ['name' ,
     'type' , 
     'date' ,
     'description',
     'price',
     'time',
    'filename',
     'mime',
     'original_filename'
]; 

protected $rules =[
    'name'=> 'required',
    'type'=> 'required',
    'date'=> 'required',
    'description'=> 'required',
    'price'=>'required',
    'time'=>'required',
    'filename'=> 'required'
];






    public function users(){
        return $this->belongsTo('App\User');
    }

    public function event_carts(){
        return $this->belongsTo('App\EventCart');
    }

    public function tickets(){
        return $this->hasOne('App\Ticket');
    }
    public function wishlists(){
        return $this->belongsToMany('App\Wishlist');
    }
   
    
}