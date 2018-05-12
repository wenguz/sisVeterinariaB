<?php

namespace sisVeterinaria\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MascotaFormRequest extends FormRequest
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
            'nombre'         => 'required|max:45',
            'raza'           => 'required|max:45',
            'especie'        => 'max:45',
            'sexo'           => 'required|max:8',
            'descripcion'    => 'max:100',
            'fecha_registro' => 'max:45',
            'idpropietario'  => 'max:8',
        ];
    }
}
