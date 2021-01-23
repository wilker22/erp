<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    protected $fillable = [
        'localizacao_id',
        'tipo_movimento_id',
        'produto_id',
        'ordem_compra_id',
        'pedido_id',
        'entrada_id',
        'saida_id',
        'ordem_producao_id',
        'ent_sai',
        'data_movimento',
        'qtde_movimento',
        'valor_movimento',
        'subtotal_movimento',
        'descricao',
        'saldoestoque',
    ];
}
