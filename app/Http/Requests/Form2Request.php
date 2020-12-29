<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form2Request extends FormRequest
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
            'tipo2' => 'required',
            'titulo2' => 'required|min:3|max:255',
            'onde_pub2' => 'required|min:3|max:255',
            'dt_pub2' => 'required',
            'customFileLang2' => 'required',
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
