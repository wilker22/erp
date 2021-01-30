<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCotacao extends Model
{
    protected $fillable = [

            'cotacao_id',
            'solicitacao_id',
            'status_item_cotacao_id',
            'fornecedor_id',
            'ordem_compra_id',
            'produto_id',
            'qtde',
            'data_entrega',
            'limite_entrega',
            'valor_cotacao',
            'subtotal'
    ];
}
