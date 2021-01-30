<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrdemCompra extends Model
{
    protected $fillable = [
        'status_ordem_compra_id',
        'fornecedor_id',
        'cotacao_id',
        'data_emissao',
        'data_atendimento',
        'data_aprovacao',
        'valor_total',
        'avulsa'
    ];

    public static function getOrdemCompra($id_ordem)
    {
        return DB::table('ordem_compras')
                ->where('ordem_compras.id', $id_ordem)
                ->join('contatos', 'contatos.id', '=', 'ordem_compras.fornecedor_id')
                ->join('status_ordem_compras', 'status_ordem_compras.id', '=', 'ordem_compras.status_ordem_compra_id')
                ->select('ordem_compras.*',
                         'contatos.nome',
                         'status_ordem_compras.status_ordem_compra'
                )->first();
    }
}
