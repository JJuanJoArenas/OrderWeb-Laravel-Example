@extends('templates.base')
@section('title', 'Crear Tecnico')
@section('header', 'Crear Tecnico')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('technician.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="document">Documento</label>
                        <input type="text" class="form-control" name="document" id="document" required>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="speciality">Especialidad</label>
                        <input list="specialites_list" class="form-control" name="speciality" id="speciality">
                        <datalist id="specialities_list">
                            <option>Instalacion de redes</option>
                            <option>Construccion</option>
                            <option>Lectura de redes</option>
                            <option>Plomeria</option>
                    </div>
                        <div class="col-lg-6 mb-4">
                        <label for="phone">Telefono</label>
                        <input type="text" class="form-control" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('technician.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection