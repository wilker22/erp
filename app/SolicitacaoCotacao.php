<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SolicitacaoCotacao extends Model
{
    protected $fillable = ['solicitacao_id', 'cotacao_id'];

    public static function listaPorIdCotacao($id_cotacao)
    {
        return DB::table('solicitacao_cotacaos')
                    ->where('cotacao_id', $id_cotacao)
                    ->join('solicitacaos', 'solicitacaos.id', '=', 'solicitacao_cotacaos.solicitacao_id')
                    ->join('produtos', 'produtos.id', '=', 'solicitacaos.produto_id')
                    ->join('status_solicitacaos', 'status_solicitacaos.id', '=', 'solicitacaos.status_solicitacao_id')
                    ->select(
                        'solicitacao_cotacaos.*',
                        'solicitacaos.qtde',
                        'status_solicitacaos.status_solicitacao',
                        'produtos.produto',
                        'produtos.id as id_produto'
                    )->get();
    }
}
