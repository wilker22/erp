<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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


}
