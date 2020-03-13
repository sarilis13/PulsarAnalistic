<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Punto_Monitoreo;
use App\Http\Requests\PuntoMonitoreoStoreRequest;
use App\Http\Requests\PuntoMonitoreoUpdateRequest;

use Illuminate\Support\Facades\DB;

class PuntoMonitoreoController extends Controller
{

    public function index()
    {
        $puntomonitoreo=Punto_Monitoreo::paginate(3);
        return view('puntosmonitoreos.index',['puntomonitoreo' => $puntomonitoreo]);
    }


    public function create()
    {
        $puntomonitoreo = new Punto_Monitoreo;
    	return view('puntosmonitoreos.create')->with(['puntomonitoreo'=>$puntomonitoreo]);
    }


    public function store(PuntoMonitoreoStoreRequest $request)
    {
        $puntomonitoreo = Punto_Monitoreo::create($request->only('nombre','x','y','z'));
        return redirect()->route('puntosmonitoreos.index')
        ->with('info','PuntoMonitoreo agregado correctamente');
    }


    public function edit($idPuntoMonitoreo)
    {
        $puntomonitoreo = Punto_Monitoreo::find($idPuntoMonitoreo);
        return view('puntosmonitoreos.edit')->with(['puntomonitoreo'=>$puntomonitoreo]);
    }


    public function update($puntomonitoreo,PuntoMonitoreoUpdateRequest $request)
    {
        Punto_Monitoreo::find($puntomonitoreo)->update($request->all());
        return redirect()->route('puntosmonitoreos.index')
        ->with('info','PuntoMonitoreo actualizado correctamente');
    }

    public function destroy(Punto_Monitoreo $idPuntoMonitoreo)
    {
        $idPuntoMonitoreo->delete();
        return redirect()->route('puntosmonitoreos.index');
    }
}
