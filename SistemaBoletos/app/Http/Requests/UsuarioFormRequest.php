<?php

namespace SistemaBoletos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres'=>'required|max:100',
            'apellidos'=>'required|max:100',
            'cedula'=>'required',
            'direccion'=>'required|max:150',
            'sexo'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'usuario'=>'required',
            'password'=>'required',
            
        ];
    }
}
