@extends('templates/base_reports')
@section('header', 'Reporte prdenes por fecha de legalizacion')
@section('content')
    <section id="results">
        @if (count($orders) != 0)
            <h4>Ordenes:</h4>
            <table id="reportTableinfo">
                <thead>
                    <tr>
                        <th>Fecha de legalizacion</th>
                        <th>Causal</th>
                        <th>Observacion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $order->legalization_date }}</td>
                        <td>{{ $order->causal_id->descritpion }}</td>
                        <td>{{ $order->observation_id->descritpion }}</td>
                    </tr>
                </tbody>
            </table>

            <br><hr>

            <table id="reportTable">
                <thead>
                    <tr>
                        <th>Fecha de legalizacion</th>
                        <th>Orden</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order['legalization_date_start,''legalization_date_end'] }}</td>
                            <td>{{ $order->causal_id->description }}</td>
                            <td>{{ $order->observation_id->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p><strong>No existen resultados en el reporte</strong></p>
        @endif
    </section>

@endsection