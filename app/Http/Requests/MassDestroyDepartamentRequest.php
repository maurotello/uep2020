<?php

namespace App\Http\Requests;

use App\Departament;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyDepartamentRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('departamento_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:departaments,id',
        ];
    }
}
