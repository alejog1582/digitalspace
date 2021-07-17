<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
            'nombre' => 'required',
			'email' => ['required', 'email'],
			'sexo' => 'required',
			'area' => 'required',
			'descripcion' => 'required',
        ];
    }
    public function messages() {
		return [
			'nombre.required' => 'El campo Nombre es obligatorio',
			'email.required' => 'El campo Email es obligatorio',
			'email.email' => 'La informacion ingresada no corresponde a un Email valido',
			'sexo.required' => 'El campo Sexo es obligatorio',
            'area.required' => 'El campo Are es obligatorio',
            'descripcion.required' => 'El campo Descripcion es obligatorio',            
        ];
    }
}
