<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Rol;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{


    use RegistersUsers;


    protected $redirectTo = '/login';


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        /**return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);*/
        $user = User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password' => bcrypt($data['password']),
            ]);
            $user->roles()->attach(Rol::where('nombre', 'user')->first());
            return $user;

    }
}
