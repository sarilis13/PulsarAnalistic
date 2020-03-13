<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitoreo extends Model
{
    protected $table = 'monitoreos';
    protected $fillable = [
        'malla', 'banco', 'nivel','fecha','puntomonitoreo_id',
        'roca_id','explosivo_id','x','y','z',
        'carga_maxima','VPP','burden','espaciamiento',
        'diametro','caras_libres','tiempo_filas',
        'tiempo_taladros','inicio_id','salida_id','usuario_id',
    ];

}
