<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pai extends Model
{
    protected $fillable = [
        'id', 'pais','descripcion'
    ];
}
