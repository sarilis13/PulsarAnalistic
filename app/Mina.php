<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mina extends Model
{
    protected $table = 'minas';
    protected $fillable = [
        'nombre', 'ubicacion', 'tipo',
    ];
}
