<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EncuestaRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //'qid'=> 'required',
            'NResolución_inscripcion' => 'required',
            'Resolucion_titulacion' => 'required',
            'Has_titulada' => 'required',
            'Has_propiedad' => 'required',
            'Has_cesion' => 'required',
            'Has_sintitulacion' => 'required',   
        ];
    }
}
