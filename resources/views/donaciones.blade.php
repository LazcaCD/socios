<!-- resources/views/donaciones.blade.php -->
@extends('layout')

@section('content')
<h2>Listado de Donaciones</h2>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Información sobre donaciones</h5>
        <p class="card-text">
            <strong>Número de socios inscritos hasta el momento:</strong> {{ $sociosCount }} <br>
            <strong>Proyección de donaciones esperadas a un año:</strong> ${{ $proyeccionAnual }} <br>
            <strong>Monto promedio de donación mensual:</strong> ${{ number_format($promedioMensual, 2) }}
        </p>
    </div>
</div>

@endsection
