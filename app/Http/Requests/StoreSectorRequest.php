<?php

namespace App\Http\Requests;

use App\Sector;
use Illuminate\Foundation\Http\FormRequest;

class StoreSectorRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('sector_create');
    }

    public function rules()
    {
        return [
            'name' => ['required',],
        ];
    }

    public function messages()
     {
        return [
            'name.required' => 'El Nombre del Sector es obligatorio',
        ];
    }
}
