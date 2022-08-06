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
            "categoria_id" => 'required',
            "unidade_id" => 'required',
            "preco" => 'required'

        ];
    }

    public function messages()
    {
        return [
            
            "produto" => 'Campo PRODUTO não pode ficar vazio!',
            "categoria_id" => 'Campo CATEGORIA não pode ficar vazio!',
            "unidade_id" => 'Campo UNIDADE não pode ficar vazio!',
            "preco" => 'Campo PREÇO não pode ficar vazio!'
        ];
    }
}
