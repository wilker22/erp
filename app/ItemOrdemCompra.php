<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOrdemCompra extends Model
{
    protected $fillable = [
        'ordem_compra_id',
        'produto_id',
        'qtde',
        'valor',
        'subtotal'
    ];
}
