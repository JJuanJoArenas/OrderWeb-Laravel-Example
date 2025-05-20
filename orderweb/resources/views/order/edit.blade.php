@extends('templates.base')
@section('title', 'Editar Ordenes')
@section('header', 'Editar Ordenes')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="legalization_date">Fecha</label>
                        <input type="date" class="form-control" name="date" id="date" required>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <label for="city">Ciudad</label>
                        <select name="city" id="city" class="form-control">
                            <option value="">Seleccione</option>
                            <option value="TULUA">Tulua</option>
                            <option value="CALI">Cali</option>
                            <option value="BUGA">Buga</option>
                            <option value="PALMIRA">Palmira</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="oservation_id">Observacion</label>
                        <select name="observation_id" id="observation_id" class="form-control">
                            <option value="">Seleccione</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="causal_id">Causal</label>
                        <select name="causal_id" id="causal_id" class="form-control">
                            <option value="">Seleccione</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection