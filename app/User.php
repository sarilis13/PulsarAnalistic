<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Rol;

use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->belongsToMany(Rol::class);
    }

    /**public function authorizeRoles($roles){
        if (is_array($roles)) {
        return $this->hasAnyRole($roles)
        ||abort(401, 'ACCION NO AUTORIZADA');
        }
        return $this->hasRole($roles)
        || abort(401, 'ACCION NO AUTORIZADA');
    }

    public function hasAnyRole($roles){
        return null !== $this->roles()->whereIn('nombre', $roles)->first();
    }

    public function hasRoles($roles){
        $roles_array = explode("|", $roles);
        if ($this->roles()->whereIn('nombre', $roles_array)->first()) {
        return true;
        }
        return false;
    }*/
}
