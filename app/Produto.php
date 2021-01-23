<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produto extends Model
{
    protected $fillable = [
        'name', 'id_categoria', 'id_unidade', 'produto', 'eh_produto', 'eh_insumo',
        'eh_promocao', 'eh_maisvendido', 'eh_lancamento', 'codigo_barra', 'preco_alto',
        'preco', 'descricao', 'imagem', 'ativo', 'estoque_inicial', 'estoque_minimo',
        'estoque_maximo', 'estoque_atual', 'estoque_reservado', 'estoque_real',
        'custo_atual', 'custo_medio', 'custo_producao', 'estoque_financeiro',
        'gtin', 'ncm', 'cbenef', 'extipi', 'cfop', 'mva', 'nfci'

    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function lista_insumo()
    {
        return self::where(`eh_insumo`, `S`)->get();
    }

    public static function atualizarEstoque($id_produto, $qtde)
    {
        $sql = "UPDATE produtos
        SET estoque_atual = estoque_atual + estoque_atual + ($qtde),
            estoque_real = estoque_real + estoque_real + ($qtde)
        WHERE id = $id_produto";

        DB::update($sql);
    }

}
