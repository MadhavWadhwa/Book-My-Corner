<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Watson\Validating\ValidatingTrait;

class User extends Authenticatable
{
    use Notifiable;
    use ValidatingTrait;

    protected $tables = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $rules = [
        'name'=>'required',
        'password'=> ' required',
        'email'=> 'required'
    ];


    public function events(){
        return $this->hasMany('App\Event');
    }

    public function event_carts(){
        return $this->hasOne('App\EventCart');
    }
    public function wishlists(){
        return $this->hasOne('App\Wishlist');
    }
}
