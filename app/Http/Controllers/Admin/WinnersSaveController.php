<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Session;
use App\Code;

use App\Mail\WinnersEmail;

use Illuminate\Support\Facades\Mail;

class WinnersSaveController extends Controller
{


    // Сохранение победителя
	public function index(){
		// Выборка победителей из временной таблицы
		$new_winners = Session::all();
		// Сохранение победителя
		Code::save_winners($new_winners);
		// Отправка писем для победителей
		self::send_mail_winners();

		return redirect()->route('admin.home');

	}

	// Отправка писем для победителей
	public function send_mail_winners(){

		$new_winners = Session::all();

		// Отправка писем для победителей
		foreach ($new_winners as $key => $winner) {

			$email = $winner->user->email;
			// Место победителя
			$place = $winner->place;
			
			Mail::to($email)->send(new WinnersEmail($place));

		}


	}



}
