<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{


  public function index()
  {
    return view('login.login');
  }

  public function store(LoginRequest $request)
  {

    //dd(Auth::user()) ;exit();

  	if(Auth::attempt(['user' => $request['usuario'],'password'=> $request['password']]) )
  	{
      //if ( (Auth::user()->estado)==1 ){
  	
        return Redirect::to('/encuesta');
      //}
    }
    else
    {
    	Session::flash('mensaje-error', 'Usuario o Contraseña incorrectos, inténtelo de nuevo...!!!');
        return Redirect::to('login');  		

    }
  }

  public function logout(){
      Auth::logout();
      Session::flush();
      return Redirect::to('login');
  }
}