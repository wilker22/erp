<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdutoLocalizacao extends Model
{
    protected $fillable = ['produto_id', 'localizacao_id', 'estoque'];

    public function lista()
    {
        $lista = DB::table('produto_localizacaos')
                    ->join('produtos', 'produto_localizacaos.produto_id', '=', 'produtos.id')
                    ->join('localizacaos', 'produto_localizacaos.localizacao_id', '=', 'localizacaos.id')
                    ->select('produtos.produto', 'localizacaos.localizacao', 'produto_localizacaos.*')
                    ->get();

        return $lista;
    }

    public static function atualizarEstoque($id_produto, $id_localizacao, $qtde)
    {
        $sql = "UPDATE produto_localizacaos
                SET estoque = estoque + ($qtde)
                WHERE produto_id = $id_produto
                AND localizacao_id = $id_localizacao";

        DB::update($sql);
    }


}
