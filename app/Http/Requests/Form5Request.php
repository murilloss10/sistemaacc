<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form5Request extends FormRequest
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
            'tipo5' => 'required',
            'quant_semestres5' => 'required',
            'nome_c5' => 'required|min:3|max:255',
            'dt_inicio5' => 'required',
            'dt_fim5' => 'required',
            'customFileLang5' => 'required',
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
