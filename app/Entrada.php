<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = [
        'produto_id',
        'qtde_entrada',
        'valor_entrada',
        'subtotal_entrada',
        'data_entrada'
    ];

    public static function lista($data)
    {
        return self::where('data_entrada', $data)
                    ->join('produtos', 'produtos.id', '=', 'entradas.produto_id')
                    ->get();
    }

    public static function total($data)
    {
        return self::where('data_entrada', $data)
                    ->sum('subtotal_entrada');
    }
}
