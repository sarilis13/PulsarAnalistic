<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = [
        'nombres','apellidos','correo','usuario','password','celular','mina_id',
    ];

    public function roles(){
        return $this->belongsToMany(Rol::class,'role_user');
    }

    public function setSession($roles){
        if (count($roles) == 1) {
            Session::put([
                'rol_id' => $roles[0]['id'],
                'rol_nombre' => $roles[0]['nombre'],
                'usuario' => $this->usuario,
                'usuario_id' => $this->id,
                'nombre_usuario' => $this->nombre
            ]);
        }
    }

    public function setPasswordAttribute($pass){
        $this->attributes['password'] = Hash::make($pass);
    }

}
