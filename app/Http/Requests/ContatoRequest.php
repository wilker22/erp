<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
            'id' => 'required',
            'eh_cliente' => 'required',
            'eh_fornecedor' => 'required',
            'eh_transportador' => 'required',
            'nome' => 'required',
            'nome_fantasia' => 'required',
            'cpf' => 'required',
            'cnpj'=> 'required',
            'data_cadastro'=> 'required',
            'ativo'=> 'required',
            'ddd'=> 'required',
            'fone'=> 'required',
            'celular'=> 'required',
            'email'=> 'required',
            'senha'=> 'required',
            'cep'=> 'required',
            'logradouro'=> 'required',
            'numero'=> 'required',
            'uf'=> 'required',
            'cidade'=> 'required',
            'complemento'=> 'required',
            'bairro'=> 'required',
            'rg' => 'required'
        ];
    }
}
