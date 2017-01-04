<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use DB;

class PrincipalController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }



  public function index()
  {    
    return view('login.login');
  }




}
