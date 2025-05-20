@extends('templates.base')
@section('title', 'Ordenes')
@section('header', 'Ordenes')
@section('content')
    
    <div class="row">
        <div class="col-lg-12 mb-4d-grid gap-2 d-md block">
            <a href="{{ route('order.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>

    @include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <table id="table_data" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Ciudad</th>
                        <th>Causal</th>
                        <th>Observacion</th>
                    </tr>
                </thead>
                <body>
                    <tr>
                        <td>04/10/2025</td>
                        <td>Tulua</td>
                        <td>Causal prueba 3</td>
                        <td>Hola</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-circle btn-sm" title="Editar">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm" title="Eliminar"
                                onclick="return remove();">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </body>
            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/general.js') }}"></script>
@endsection