<?php

namespace App\Http\Requests\Sistema\Recados;

use Illuminate\Foundation\Http\FormRequest;

class RecadosFormRequest extends FormRequest
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
            'titulo'=>'required',
            'descricao'=>'required',
            'data'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'titulo.required'=>'Titulo e Obrigatorio.',
            'titulo.unique'=>'Titulo ja existe.',
            'descricao.required'=>'Descrição e Obrigatorio.',
            'data.required'=>'Data e Obrigatorio'
        ];
    }
}
