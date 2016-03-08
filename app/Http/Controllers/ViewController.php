<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
	
	public function create (){

		return view('public.pages.create');
	}

	public function login() {

		return view('public.pages.login');

	}

}
