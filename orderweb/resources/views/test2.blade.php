@extends('templates.base')
@section('title', 'Test 2')
@section('content')

        <h1>Test 2</h1>
        <q>No soy un hombre de plegarias, pero si estas en el cielo, ayudame Superman!</q>
        <small>Homero J. Simpson</small>
        <button onclick="show_alert()">Click!</button>

@endsection

@section('scripts')
        <script src="{{ asset('js/test.js') }}"></script>
@endsection