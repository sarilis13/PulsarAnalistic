<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Mina;
use App\Rol;
use Validator;
use response;
use Illuminate\Support\Facades\input;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioStoreRequest;
use App\Http\Requests\UsuarioUpdateRequest;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuario=Usuario::paginate(2);
        $mina=Mina::all();
        $rol=Rol::all();
        return view('usuarios.index')->with(['usuario'=>$usuario])->with(['mina'=>$mina])->with(['rol'=>$rol]);
    }


    public function addUsuario(UsuarioStoreRequest $req)
    {
        $validator=Validator::make(input::all(), $req);
        if($validator->fails())
        return response()->json(array('errors'=>$validator->getMessageBag()->toarray()));

        else{
            $usuario = new Usuario;
            $usuario->nombres = $req -> nombres;
            $usuario->apellidos = $req -> apellidos;
            $usuario->celular = $req -> celular;
            $usuario->usuario = $req -> usuario;
            $usuario->correo = $req -> correo;
            $usuario->password = $req -> password;
            $usuario->mina_id = $req -> mina_id;
            $usuario->rol_id = $req -> rol_id;
            $usuario->save();
            return response()->json($usuario);
        }

    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
