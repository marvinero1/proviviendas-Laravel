<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = [
        'id', 'tabla_id','type_id','reporte','descripcion','cliente_id'
    ];
}
