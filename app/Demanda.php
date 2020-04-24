<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demanda extends Model
{
    protected $fillable = [
        'id','titulo','descripcion','telefono','celular','whatsapp','estado'
    ];
}
