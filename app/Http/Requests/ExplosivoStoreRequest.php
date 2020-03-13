<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExplosivoStoreRequest extends FormRequest
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
            'nombre' => 'required|unique:explosivos,nombre',
            'densidad' => 'required',
            'VOD' => 'required',
            'energia' => 'required',
            'presion' => 'required',
        ];
    }
}
