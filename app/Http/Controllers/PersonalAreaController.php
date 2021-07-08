<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Code;

use Illuminate\Support\Facades\Auth;

class PersonalAreaController extends Controller
{
   
   	// Вид
	public function index(){

		$id_user = Auth::user()->id;

		$all_codes = Code::where('user_id', $id_user)->get();

	
		return view('personal_area.index', compact('all_codes'));

	}

}










		//$arraow_cod = [];
/*
		for($a = 0; $a < 10; $a++){

			$cod_random = substr(md5(rand(000000, 999999)), 0, 16);

			//$cod = Code::add($cod_random);

			echo substr(md5(rand(000000, 999999)), 0, 16) . '<br>';

		}
*/