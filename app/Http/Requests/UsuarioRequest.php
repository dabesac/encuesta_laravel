<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'dni' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required',
            'user' => 'required',
           // 'password' => 'required',
            'id_tipo_usuario' => 'required',
            'estado' => 'required'
         
        ];
    }
}
