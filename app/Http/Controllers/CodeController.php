<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Code;
use Auth;

class CodeController extends Controller
{
    
	public function index(){

		return view('personal_area.form');

	}

	public function store(Request $request){

		$this->validate($request, [

			'code' => 'required|min:16',

		]);


		// Проверка кода на существование
		$code_check = Code::code_check($request->code);

		if(!$code_check){
				
			return redirect()->back()->with('code_check', 'Проврете ваш код!');
		} 

		// Проверка на уникальность 
		$code_active = Code::active_check($request->code);

		if(!$code_active){

			return redirect()->back()->with('code_check', 'Этот код уже зарегистрирован!');
		} 

		// Текущий пользователь
		$id_user = Auth::user()->id;
		// Активируем код
		Code::code_active($id_user, $code_active);

		return redirect()->route('personal_area.index')->with('code_status', 'Код зарегистрирован!');

	}

}





/*
		// Генератор кодов
		for($a = 0; $a < 100; $a++){


			$request->code = Code::generate_code(substr(md5(rand(000000, 999999)), 0, 16));


			}
*/	