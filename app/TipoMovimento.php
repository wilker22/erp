<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimento extends Model
{
    protected $fillable = ['tipo_movimento', 'ent_sai'];
}
