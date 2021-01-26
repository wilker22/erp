<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{
    protected $fillable = [
        'status_cotacao_id', 'data_abertura', 'data_encerramento'
    ];
}
