<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punto_Monitoreo extends Model
{
    protected $table = 'puntos_monitoreos';
    protected $fillable = [
        'nombre', 'x', 'y','z',
    ];

}
