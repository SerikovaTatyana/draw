<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class City extends Model
{
    //

	public function user(){

		return $this->hasOne(User::class);

	}

}
