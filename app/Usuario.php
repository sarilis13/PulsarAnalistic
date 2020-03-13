<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = [
        'nombres','apellidos','celular','usuario','correo','password',
        'mina_id','rol_id',
    ];
}
