<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            "produto" => 'required',
            "id_categoria" => 'required',
            "id_unidade" => 'required',
            "prreco" => 'required'

        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }
}
