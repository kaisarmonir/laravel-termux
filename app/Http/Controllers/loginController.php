<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
	{
		return view('login');
	}
	public function loginSubmit(request $request)
	{
		echo $request->input('email') ;
	}
	public function indexx($e, string $f, request $request){
		echo $request->path() . "</br>" .$request->url(). "</br>" .$request->fullurl()."</br>". $f;
	}
	
}
