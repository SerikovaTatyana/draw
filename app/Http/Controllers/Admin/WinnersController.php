<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Code;

use App\Session;

class WinnersController extends Controller
{
    // Вывод списка всех победителей
	public function index(){

     
		$winners = Code::where('place', '!=', 0)->orderBy('place', 'asc')->paginate(10);
		

		return view('admin.winners', ['winners' => $winners]);
		

		
	}

	// Показ формы с выбором месяца
	public function create(){

		/*
		$selection_winner = Code::selection_winner();

		return view('admin.selection_winner', ['selection_winner' => $selection_winner]);
		*/

		return view('admin.winner_form');

	}

	// Выбор победителей
	public static function store(Request $request){

		// Выбор победителей
		$selection_winner = Code::selection_winner($request->month);
		// Вывод сообщения
		$message = '';

		// Удаление старых победителей из временной таблицы
		//Session::delete_session();

		// Сохранение победителей во временную таблицу
		//Session::save_session($selection_winner);

		if($selection_winner){
			$message = 'Подтвердите выбор победителей. Победителям будет отправлено сообщение на почту.';
		}

		return view('admin.selection_winner', ['selection_winner' => $selection_winner, 'message' => $message]);
		

		
	}
	

}
