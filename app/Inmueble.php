<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $fillable = [
        'id', 'titulo','descripcion','oferta','tipo_inmueble','estado','direccion','lat','lng','precio','celular','telefono','whatsapp'
    ];
}
