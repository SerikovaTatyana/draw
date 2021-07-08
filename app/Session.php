<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Code;
use App\User;

class Session extends Model
{
    //
	//protected $fillable = ['user_id ', 'cod_id', 'place'];

	protected $fillable = ['user_id', 'cod_id', 'place'];


	public function user(){

		return $this->belongsTo(User::class);

	}

	// Сохранение победителей во временную таблицу
	public static function save_session($session_winners){

		foreach ($session_winners as $key => $value) {

			$session_winner = new static;
			// Другое название столбца в таблице sessions
			$value->attributes['cod_id'] = $value->attributes['id'];

			$session_winner->fill($value->attributes);
			$session_winner->save();

		}

	}

	// Очистка временной таблицы
	public static function delete_session(){

		Session::truncate();

	}


}
