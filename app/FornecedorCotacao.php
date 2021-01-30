<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FornecedorCotacao extends Model
{
    protected $fillable = ['fornecedor_id', 'cotacao_id'];

    public static function listaPorIdCotacao($id_cotacao)
    {
        return DB::table('fornecedor_cotacaos')
                    ->where('cotacao_id', $id_cotacao)
                    ->join('contatos', 'contatos.id', '=', 'fornecedor_cotacaos.fornecedor_id')
                    ->select(
                        'fornecedor_cotacaos.*',
                        'contatos.nome',
                        'contatos.email',
                        'contatos.fone',
                        'contatos.id as id_contato'
                    )->get();
    }
}
