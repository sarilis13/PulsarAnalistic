<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roca extends Model
{
    protected $table = 'rocas';
    protected $fillable = [
        'nombre', 'densidad', 'compresion','young',
    ];

}
