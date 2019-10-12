<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
  function index(){
  	return view('login');
  }

  function checkLogin(Request $request){
  	$this->validate($request, [
  		'email' => 'required|email',
  		'password' => 'required|alphaNum|min:3'
  	]);

  	$userData = [
  		'email' => $request->get('email'),
  		'password' => $request->get('password'),
  	];

  	if(Auth::attempt($userData)){
  		return redirect('main/successLogin');
  	} else {
  		return back()->with('error', 'Wrong credentials, please try again');
  	}
  }

  function successLogin(){
  	return view('index');
  }

  function logout(){
  	Auth::logout();
  	return redirect('main');
  }
}
