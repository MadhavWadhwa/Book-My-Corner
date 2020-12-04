<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['price','name'];
    




    public function events(){
        return $this->hasOne('App\Event');
    }
}
