<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ItemOrdemCompra extends Model
{
    protected $fillable = [
        'ordem_compra_id',
        'produto_id',
        'qtde',
        'valor',
        'subtotal'
    ];

    public static function listaPorIdOrdemCompra($id_ordem)
    {
        return DB::table('item_ordem_compras')
                    ->where('ordem_compra_id', $id_ordem)
                    ->join('produtos', 'produtos.id', '=', 'item_ordem_compras.produto_id')
                    ->select(
                        'item_ordem_compras.*',
                        'produtos.produto',
                        'produtos.id as id_produto'
                    )->get();
    }
}
