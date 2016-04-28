<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FormularioCreateRequest extends Request
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
            'cedula' => 'required|numeric|max:1700000000',
            'nombre' => 'required|min:3|max:40',
            'carrera' => 'required',
            'pais' => 'required',
            'promedio' => 'required|numeric|min:0|max:5',
        ];
    }
}
