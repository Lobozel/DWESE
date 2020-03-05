<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        if($this->method()=="PUT"){
            return [
                'apellidos'=>'required',
                'nombre'=>'required',
                'mail'=>'required|unique:clientes,mail,'.$this->cliente->id
            ];
        }else{
            return [
                'apellidos'=>'required',
                'nombre'=>'required',
                'mail'=>'required|unique:clientes,mail'
            ];
        }
        
    }

    public function messages(){
        return [
            'apellidos.required'=>'Es necesario introducir los apellidos del cliente',
            'nombre.required'=>'Es necesario introducir el nombre del cliente',
            'mail.required'=>'Introduce un email válido',
            'mail.unique'=>'El email del cliente debe ser único, no pueden existir dos clientes con el mismo email'
        ];
    }
}
