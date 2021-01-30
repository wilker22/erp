<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cotacao extends Model
{
    protected $fillable = [
        'status_cotacao_id', 'data_abertura', 'data_encerramento'
    ];

    public static function lista()
    {
        return DB::table('cotacaos')
                        ->join('status_cotacaos', 'status_cotacaos.id', '=', 'cotacaos.status_cotacao_id')
                        ->select('cotacaos.*', 'status_cotacaos.status_cotacao')->get();
    }
}
