<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\City;

use Carbon\Carbon;
use Jenssegers\Date\Date;

class Code extends Model
{
    
	protected $fillable = ['cod'];

	public function user(){

		return $this->belongsTo(User::class);

	}

	

	// Создание кода
	public function add($fields){

		$cod = new static;
		$cod->fill($fields);

		$cod->save();

		return $cod;

	}

	// Проверка кода на существование
	static function code_check($code){

		// Проверяем существует ли код
		return $code_check = Code::where('cod', $code)->first();

	}

	// Проверка кода на активность
	static function active_check($code){

		$code = Code::where('cod', $code)->first();

		if($code->status == 1){
			return null;
		} 

		return $code;

	}

	// Активируем код
	static function code_active($id_user, $code){

		$code->status = 1;
		$code->user_id = $id_user;

		$code->save();
		return $code;
	}

	// Название города
	public function city_name() {
		// Получаем id города
		$id_name = $this->user->city_id;
		// Получаем название города
		$city = City::select('name')->where('id', $id_name)->get();

		return $city[0]->name;

	}

	// Меняем формат даты
	public function get_date(){

		// Меняем формат даты
		$date = $this->updated_at;

		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y');
		
	}

	// Название месяца по цифре
	public function month_word($month){

		$month = Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('F');
		return $month = Date::parse($this->updated_at)->format('F');

		//$month = Carbon::createFromFormat('m', $month)->format('F');

		//return $month = Date::parse($month)->format('F');

	}

	// Выбор победителя 
	static function selection_winner($month){

		$winners = Code::inRandomOrder()->where('status', 1)->where('place', '==', 0)->limit(6)->get();

		foreach ($winners as $key => $winner) {


			switch ($key) {
				case 0:
					$winner_place = $key + 1;
					break;
				case 1:
					$winner_place = $key + 1;
					break;
				case 2:
					$winner_place = 2;
					break;
				default:
					$winner_place = 3;
					break;
			}


			$winner->place = $winner_place;
			$winner->month = $month;

			

		}		

		return $winners;

	}


	// Сохранение победителей в постаянную таблицу
	public static function save_winners($new_winners){

		foreach ($new_winners as $key => $value) {
			
			$cod = Code::find($value->cod_id);

			$cod->place = $value->place;

			$cod->save();

		}

		return;

	}

/*
	// Текущие коды пользователя
	public function codes_user($id_user){

		//return Code::where('user_id', $id_user);

		return slef::where('user_id', $id_user);

	}
*/
/*
	// Генератор кодов
	static function generate_code($generate_code){

		$code = new static;
		$code->cod = $generate_code;	

		$code->save();

		return $code;

	}
	*/
}
