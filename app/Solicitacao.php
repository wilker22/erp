<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Solicitacao extends Model
{

    protected $fillable = [
        'produto_id',
        'status_solicitacao_id',
        'ordem_compra_id',
        'fornecedor_id',
        'qtde',
        'data_entrega',
        'data_solicitacao',
        'hora_solicitacao'
    ];

    public static function listaSolicitacaoPorStatus($id_status)
    {
        return DB::table('solicitacaos')
                    ->where('status_solicitacao_id', $id_status)
                    ->join('produtos', 'produtos.id', '=', 'solicitacaos.produto_id')
                    ->join('status_solicitacaos', 'status_solicitacaos.id', '=', 'solicitacaos.status_solicitacao_id')
                    ->select('solicitacaos.*',
                            'produtos.id as id_produto',
                            'produtos.produto',
                            'status_solicitacaos.status_solicitacao')
                    ->get();
    }
}
