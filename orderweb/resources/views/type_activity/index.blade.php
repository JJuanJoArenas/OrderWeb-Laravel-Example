@extends('templates.base')
@section('title', 'Tipos de Actividades')
@section('header', 'Tipos de Actividades')
@section('content')
    
    <div class="row">
        <div class="col-lg-12 mb-4d-grid gap-2 d-md block">
            <a href="{{ route('type_activity.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <body>
                    @foreach ($type_activities as $type_activity)
                    <tr>
                        <td>{{ $type_activity["id"] }}</td>
                        <td>{{ $type_activity["description"] }}</td>
                        <td>
                            <a href="{{ route('type_activity.edit', $type_activity["id"]) }}" class="btn btn-primary btn-circle btn-sm" title="Editar">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="{{ route('type_activity.destroy', $type_activity["id"]) }}" class="btn btn-danger btn-circle btn-sm" title="Eliminar"
                                onclick="return remove();">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection