<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            'tipo' => 'required',
            'carga_horaria' => 'required',
            'nome_projeto' => 'required|min:3|max:255',
            'dt_inicio' => 'required',
            'dt_fim' => 'required',
            'customFileLang' => 'required',
            'titulo' => 'required|min:3|max:255',
            'onde_pub' => 'required|min:3|max:255',
            'dt_pub' => 'required',
            'nome_evento' => 'required|min:3|max:255',
            'local' => 'required|min:3|max:255',
            'dt_evento' => 'required',
            'quant_semestres' => 'required',
            'nome_c' => 'required|min:3|max:255',
            'quant_semestres' => 'required',
            'nome_inst' => 'required|min:3|max:255',
            'nome_atividade' => 'required|min:3|max:255',
            'dt_atividade' => 'required',
            'nome_proj' => 'required|min:3|max:255',
            'dt_proj' => 'required',
            'nome_disc' => 'required|min:3|max:255',
            'dt_local' => 'required',
            'nome_curso' => 'required',
            'nome_maratona' => 'required|min:3|max:255',
            'dt_maratona' => 'required'
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
