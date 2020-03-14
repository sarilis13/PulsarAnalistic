<?php

namespace App;

use App\Rol;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Session;
class Usuario extends Authenticatable
{
    use Notifiable;
    protected $remember_token = false;
    protected $table = 'usuarios';
    protected $fillable = [
        'nombres','apellidos','correo','usuario','password','celular','mina_id',
    ];

    public function rol(){
        return $this->belongsToMany(Rol::class,'role_user');
    }

    public function setSession($roles){
        // dd($roles);
        if (count($roles) == 1) {
            Session::put([
                'role_id' => $roles[0]['id'],
                'rol_nombre' => $roles[0]['nombre'],
                'usuario' => $this->usuario,
                'usuario_id' => $this->id,
                'nombre_usuario' => $this->nombre
            ]);
        }
    }

    // public function setPasswordAttribute($pass){
    //     $this->attributes['password'] = Hash::make($pass);
    // }

}
