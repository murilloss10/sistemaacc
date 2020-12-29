<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form6Request extends FormRequest
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
            'quant_semestres6' => 'required',
            'dt_inicio6' => 'required',
            'dt_fim6' => 'required',
            'customFileLang6' => 'required',
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
