<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonitoreoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'malla'=>'required|unique:monitoreos,malla',
            'banco'=> 'required',
            'nivel'=> 'required',
            'fecha'=> 'required',
            'puntomonitoreo_id'=> 'required',
            'roca_id'=> 'required',
            'explosivo_id'=> 'required',
            'x'=> 'required',
            'y'=> 'required',
            'z'=> 'required',
            'carga_maxima'=> 'required',
            'VPP'=> 'required',
            'burden'=> 'required',
            'espaciamiento'=> 'required',
            'diametro'=> 'required',
            'caras_libres'=> 'required',
            'tiempo_filas'=> 'required',
            'tiempo_taladros'=> 'required',
            'inicio_id'=> 'required',
            'salida_id'=> 'required',
            'usuario_id'=> 'required',
        ];
    }
}
