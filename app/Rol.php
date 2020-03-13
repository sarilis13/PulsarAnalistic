<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'nombre',
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
