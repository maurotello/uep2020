@extends('layouts.admin')
@section('content')

<div class="card">
    <div style="width= 100%" class="card-header">
        {{ trans('uep.show') }} {{ trans('uep.zona.title_singular') }}
            <button type="button" class="btn btn-primary pull-right" onclick="history.back()">Volver</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('uep.zona.fields.name') }}
                    </th>
                    <td>
                        {{ $zone->name }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection