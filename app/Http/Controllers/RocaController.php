<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roca;
use App\Http\Requests\RocaStoreRequest;
use App\Http\Requests\RocaUpdateRequest;
use Illuminate\Support\Facades\DB;

class RocaController extends Controller
{

    public function index()
    {
        $roca=Roca::paginate(2);
        return view('rocas.index',['roca' => $roca]);
    }


    public function create()
    {
        $roca = new Roca;
    	return view('rocas.create')->with(['roca'=>$roca]);
    }

    public function store(RocaStoreRequest $request)
    {
        $roca = Roca::create($request->only('nombre', 'densidad', 'compresion','young'));
        return redirect()->route('rocas.index')
        ->with('info','Roca agregada correctamente');
    }


    public function edit($idRoca)
    {
        $roca = Roca::find($idRoca);
        return view('rocas.edit')->with(['roca'=>$roca]);
    }


    public function update(RocaUpdateRequest $request,$roca)
    {
        Roca::findOrFail($roca)->update($request->all());
        return redirect()->route('rocas.index')
        ->with('info','Roca actualizada correctamente');
    }

    public function destroy(Roca $idRoca)
    {
        $idRoca->delete();
        return redirect()->route('rocas.index');
    }
}
