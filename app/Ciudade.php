<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    protected $fillable = [
        'id', 'ciudad','descripcion'
    ];
}
