<?php

namespace App\Http\Controllers;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
    }*/

    public function index(){
        //$user = User::orderBy('id','ASC')->paginate(5);
        $user=DB::table('users')->paginate(5);
       // $user = $users->toArray();
        return view('users.index',compact('user'));
    }

     //Mostrar el formulario para crear nuevo registro
     public function create(){
        $role=Role::get();
        return view('users.create',compact('role'));

    }

    //Mostrara los registros recien creados
    public function store(Request $request){
        $user = User::create($request->all());
        return redirect()->route('users.edit',$user->id)
        ->with('info','Usuario guardado correctamente');
    }

    //Mostrar un registro especifico
    public function show(User $user){
        return view('users.show',compact('user'));
    }

    //Mostrar el formulario con los datos a editar de un registro especifico
    public function edit(User $user){
        $role=Role::get();
        return view('users.edit',compact('user','role'));
    }

    //Actualizar un registro en la base de datos
    public function update(Request $request,User $user){
        //actualizar el usuario
        $user->update($request->all());
        //actualizar roles
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.edit', $user->id)
        ->with('info','Usuario actualizado correctamente');
    }

    //Eliminar un registro especifico de la base de datos
    public function destroy(User $user){
        $user->delete();
        return back()->with('info','Eliminado correctamente');
    }

}
