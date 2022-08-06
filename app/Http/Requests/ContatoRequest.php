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
    
    public function messages()
    {
        return [


            'nome' => 'O campo NOME não pode ficar vazio!',
            'cpf' => 'O campo NOME não pode ficar vazio!',
            'cnpj'=> 'O campo CNPJ não pode ficar vazio!',
            'data_cadastro'=> 'O campo DATA DO CADASTRO não pode ficar vazio!',
            'ativo'=> 'O campo ATIVO não pode ficar vazio!',
            'ddd'=> 'O campo DDD não pode ficar vazio!',
            'celular'=> 'O campo CELULAR não pode ficar vazio!',
            'email'=> 'O campo E-MAIL não pode ficar vazio!',
            'senha'=> 'O campo SENHA não pode ficar vazio!',

        ];
    }

    
    public function rules()
    {
        return [


            'nome' => 'required',
            'cpf' => 'required',
            'cnpj'=> 'required',
            'data_cadastro'=> 'required',
            'ativo'=> 'required',
            'ddd'=> 'required',
            'celular'=> 'required',
            'email'=> 'required',
            'senha'=> 'required',

        ];
    }
}
