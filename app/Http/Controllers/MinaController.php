<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mina;
use App\Http\Controllers\Controller;
use App\Http\Requests\MinaStoreRequest;
use App\Http\Requests\MinaUpdateRequest;
use Illuminate\Support\Facades\DB;


class MinaController extends Controller
{

    public function index()
    {
        //$mina=Mina::orderBy('id','ASC')->paginate(3);
        $mina=Mina::paginate(3);
        return view('minas.index',['mina' => $mina]);

    }

    public function edit($idMina)
    {
        $mina = Mina::find($idMina);
        return view('minas.edit')->with(['mina'=>$mina]);
    }

    public function create()
    {
        $mina = new Mina;
    	return view('minas.create')->with(['mina'=>$mina]);
    }

    public function store(MinaStoreRequest $request)
    {
        $mina = Mina::create($request->only('nombre','ubicacion','tipo'));
        return redirect()->route('minas.index')
        ->with('info','Mina agregada correctamente');
    }

    public function update($mina,MinaUpdateRequest $request)
    {
        Mina::find($mina)->update($request->all());
        return redirect()->route('minas.index')
        ->with('info','Mina actualizada correctamente');
    }


    public function destroy(Mina $idMina)
    {
        $idMina->delete();
        return redirect()->route('minas.index');
    }
}
