<?php

namespace sisVeterinaria\Http\Requests;

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
            'usuario'=>'required|max:45',
            'pass'=>'required|max:45',
            'idpersonal'=>'required|max:11',
            'idpersonal'=>'max:11',
            'idtipo'=>'max:11',
        ];
    }
}
