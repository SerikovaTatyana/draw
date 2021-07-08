<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use App\User;

use App\Code;

class MainController extends Controller
{
    
	public function index(){
		
		$codes = Code::where('status', 1)->paginate(10);

		return view('admin.index', ['codes' => $codes]);

	}

}
