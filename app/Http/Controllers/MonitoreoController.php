<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Monitoreo;
use App\Punto_Monitoreo;
use App\Explosivo;
use App\Roca;
use App\Entrada;
use App\Salida;
use App\User;
use App\Http\Requests\MonitoreoStoreRequest;
use App\Http\Requests\MonitoreoUpdateRequest;

use Illuminate\Support\Facades\DB;

class MonitoreoController extends Controller
{
    public function index()
    {
        $monitoreo=Monitoreo::paginate(4);
        return view('monitoreos.index',['monitoreo' => $monitoreo]);
    }


    public function create()
    {
        $monitoreo = new Monitoreo;
        $puntomonitoreo=Punto_Monitoreo::all();
        $explosivo=Explosivo::all();
        $roca = Roca::all();
        $entrada = Entrada::all();
        $salida = Salida::all();
        $usuario = User::all();
        return view('monitoreos.create')->with(['monitoreo'=>$monitoreo])->with(['puntomonitoreo'=>$puntomonitoreo])
        ->with(['explosivo'=>$explosivo])->with(['roca'=>$roca])->with(['entrada'=>$entrada])->with(['salida'=>$salida])
        ->with(['usuario'=>$usuario]);
    }


    public function store(monitoreoStoreRequest $request)
    {
        $monitoreo = Monitoreo::create($request->only('malla', 'banco', 'nivel','fecha','puntomonitoreo_id',
        'roca_id','explosivo_id','x','y','z',
        'carga_maxima','VPP','burden','espaciamiento',
        'diametro','caras_libres','tiempo_filas',
        'tiempo_taladros','inicio_id','salida_id','usuario_id'));
        return redirect()->route('monitoreos.index')
        ->with('info','Monitoreo agregado correctamente');
    }


    public function edit($idMonitoreo)
    {
        $monitoreo = Monitoreo::find($idMonitoreo);
        $puntomonitoreo=Punto_Monitoreo::all();
        $explosivo=Explosivo::all();
        $roca = Roca::all();
        $entrada = Entrada::all();
        $salida = Salida::all();
        $usuario = User::all();
        return view('monitoreos.edit')->with(['monitoreo'=>$monitoreo])->with(['puntomonitoreo'=>$puntomonitoreo])
        ->with(['explosivo'=>$explosivo])->with(['roca'=>$roca])->with(['entrada'=>$entrada])->with(['salida'=>$salida])
        ->with(['usuario'=>$usuario]);
    }


    public function update($monitoreo,monitoreoUpdateRequest $request)
    {
        Monitoreo::find($monitoreo)->update($request->all());
        return redirect()->route('monitoreos.index')
        ->with('info','Monitoreo actualizado correctamente');
    }

    public function destroy(Monitoreo $idMonitoreo)
    {
        $idMonitoreo->delete();
        return redirect()->route('monitoreos.index');
    }
}
