<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Explosivo extends Model
{
    protected $table = 'explosivos';
    protected $fillable = [
        'nombre', 'densidad', 'VOD','energia','presion',
    ];

}
