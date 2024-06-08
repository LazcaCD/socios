<!-- resources/views/cambiar_estado.blade.php -->
@extends('layout')

@section('content')
<h2>Lista de Socios</h2>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th> <!-- Nueva columna para el botón -->
        </tr>
    </thead>
    <tbody>
        @foreach ($socios as $socio)
        <tr>
            <td>{{ $socio->id }}</td>
            <td>{{ $socio->nombre }}</td>
            <td>{{ $socio->estado }}</td>
            <td>
                <!-- Botón para cambiar el estado -->
                <form action="{{ route('cambiar.estado', $socio->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-danger">Cambiar a Inactivo</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
