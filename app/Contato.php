<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'id',
        'eh_cliente',
        'eh_fornecedor',
        'eh_transportador',
        'nome',
        'nome_fantasia',
        'cpf',
        'cnpj',
        'data_cadastro',
        'ativo',
        'ddd',
        'fone',
        'celular',
        'email',
        'senha',
        'cep',
        'logradouro',
        'numero',
        'uf',
        'cidade',
        'complemento',
        'bairro',
        'rg'
    ];
}
