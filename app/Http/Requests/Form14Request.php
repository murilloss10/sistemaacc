<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form14Request extends FormRequest
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
            'tipo14' => 'required',
            'carga_horaria14' => 'required',
            'nome_projeto14' => 'required|min:3|max:255',
            'dt_inicio14' => 'required',
            'dt_fim14' => 'required',
            'customFileLang14' => 'required',
        ];
    }

    public function messages(){
        return [
            'required' => 'Este campo é obrigatório',
            'min' => 'Este campo não tem o mínimo de caracteres',
            'max' => 'Este campo ultrapassou o máximo de caracteres',
        ];
    }
}
