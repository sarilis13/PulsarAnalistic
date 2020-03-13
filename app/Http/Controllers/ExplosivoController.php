<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Explosivo;
use App\Http\Requests\ExplosivoStoreRequest;
use App\Http\Requests\ExplosivoUpdateRequest;
use Illuminate\Support\Facades\DB;

class ExplosivoController extends Controller
{

    public function index()
    {
        $explosivo=Explosivo::paginate(2);
        return view('explosivos.index',['explosivo' => $explosivo]);
    }

    public function create()
    {
        $explosivo = new Explosivo;
    	return view('explosivos.create')->with(['explosivo'=>$explosivo]);
    }

    public function store(ExplosivoStoreRequest $request)
    {
        $explosivo = Explosivo::create($request->only('nombre', 'densidad', 'VOD','energia','presion'));
        return redirect()->route('explosivos.index')
        ->with('info','Explosivo agregado correctamente');
    }

    public function edit($idExplosivo)
    {
        $explosivo = Explosivo::find($idExplosivo);
        return view('explosivos.edit')->with(['explosivo'=>$explosivo]);
    }


    public function update($explosivo,ExplosivoUpdateRequest $request)
    {
        Explosivo::find($explosivo)->update($request->all());
        return redirect()->route('explosivos.index')
        ->with('info','Explosivo actualizado correctamente');
    }


    public function destroy(Explosivo $idExplosivo)
    {
        $idExplosivo->delete();
        return redirect()->route('explosivos.index');
    }
}
