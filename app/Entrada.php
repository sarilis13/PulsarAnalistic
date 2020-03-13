<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'inicios';
    protected $fillable = [
        'nombre',
    ];
}
