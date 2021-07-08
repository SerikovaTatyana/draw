<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Code;
use App\City;
use App\Session;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'city_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function codes(){

        return $this->hasMany(Code::class);

    }

    public function sessions(){

    	return $this->hasMany(Session::class);

    }

/*
    public function city(){

        return $this->hasOne(City::class);

    }

*/

}
