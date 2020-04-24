<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corredore extends Model
{
    protected $fillable = [
        'id', 'cliente_id','empresa','descripcion','nit','celular','telefono','email','imagen'
    ];
}
