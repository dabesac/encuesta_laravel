<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use Session;

use DB;
use path;
use Redirect;


use App\Http\Requests;
use App\Http\Requests\UsuarioRequest;

use App\Http\Controllers\Controller;

use App\User;


class UsuarioController extends Controller
{
	public function index(){
		$usuario = DB::table('users')
      //->leftjoin('unidad_organica', 'unidad_organica.id_unidad_organica', '=', 'users.id_unidad_organica')
      ->select('users.*')
      ->get();
    	return view('usuario.listar',['usuario' => $usuario]);
	}

	public function create(){
    	return view('usuario.create');
	}

	  public function edit($id)
  	{

    	$user = User::find($id);
    	return view('usuario.edit',['user'=>$user]);
 	 }

	public function store(UsuarioRequest $request)
  	{
  		try{

		    $nuevo_usuario = new User;
		    $nuevo_usuario->dni = $request->dni;
		    $nuevo_usuario->nombres = $request->nombres;
		    $nuevo_usuario->apellidos = $request->apellidos;
		   
		    $nuevo_usuario->email = $request->email;
		    if ($request->cargo==""){
		     $nuevo_usuario->cargo = NULL;
		    }else{
		     $nuevo_usuario->cargo = $request->cargo;
		    }
		  
		    $nuevo_usuario->user = $request->user;
		    $nuevo_usuario->password = bcrypt($request->user);
		   
		    $nuevo_usuario->id_tipo_usuario = $request->id_tipo_usuario;
		    $nuevo_usuario->estado = $request->estado;
		
		    $nuevo_usuario->descripcion = $request->descripcion;
		    $nuevo_usuario->id_usuario_at = Auth::user()->id;


		    $nuevo_usuario->save();
		    Session::put('success', 'Registro creado correctamente...!!!');
		    return Redirect::to('usuario');

  		}
  		catch (Exception $e) {
	      return \Response::json(array(
	        'error' => true,
	        'data' => array()),
	        500
	      );
	    }


  	}

	public function update(UsuarioRequest $request, $id)
	  {
	    User::where('id',$id)->update([
	      'nombres' => $request->nombres,
	      'apellidos' => $request->apellidos,
	    
	      'email' => $request->email,
	      'cargo' => $request->cargo,
	  
	      'user' => $request->user,
	     
	      'id_tipo_usuario' => $request->id_tipo_usuario,
	      'estado' => $request->estado,
	    
	      'descripcion' => $request->descripcion,
	      'id_usuario_at' => Auth::user()->id
	    ]);
	    Session::flash('success','Datos del Usuario actualizado correctamente ...!!!');
	    return Redirect::to('usuario');
	  }


	public function desact($id){
	    User::where('id',$id)->update([	
	    
	      'estado' => 0,
	      'id_usuario_at' => Auth::user()->id
	    ]);
	    Session::flash('success','Datos del Usuario actualizado correctamente ...!!!');
	    return Redirect::to('usuario');	
	}
	

	public function password(Request $request) {
	    $password = bcrypt($request->password);
	    $id = $request->user_id;
	    User::where('id',$id)->update([
	      'password' => $password,
	      'id_usuario_at' => Auth::user()->id
	    ]);
	    Session::flash('success','Password del Usuario actualizado correctamente ...!!!');
	    return Redirect::to('usuario');
	}
}

