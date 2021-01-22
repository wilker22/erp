<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    protected $fillable = [
        'produto_id',
        'localizacao_id',
        'qtde_saida',
        'valor_saida',
        'subtotal_saida',
        'data_saida'
    ];

    public static function lista($data)
    {
        return self::where('data_saida', $data)
                    ->join('produtos', 'produtos.id', '=', 'saidas.produto_id')
                    ->join('localizacaos', 'localizacaos.id', '=', 'saidas.localizacao_id')
                    ->select('localizacaos.localizacao', 'produtos.produto', 'saidas.*')
                    ->get();
    }

    public static function total($data)
    {
        return self::where('data_saida', $data)
                    ->sum('subtotal_saida');
    }
}
