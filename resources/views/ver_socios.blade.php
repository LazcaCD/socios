<!-- resources/views/ver_socios.blade.php -->
@extends('layout')

@section('content')
<h2>Lista de Socios</h2>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>RUT</th>
            <th>Dirección</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Monto Mensualidad</th>
            <th>Fecha Término</th>
            <th>Fecha Ingreso</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($socios as $socio)
        <tr>
            <td>{{ $socio->id }}</td>
            <td>{{ $socio->nombre }}</td>
            <td>{{ $socio->apellido }}</td>
            <td>{{ $socio->rut }}</td>
            <td>{{ $socio->direccion }}</td>
            <td>{{ $socio->email }}</td>
            <td>{{ $socio->telefono }}</td>
            <td>{{ $socio->monto_mensualidad }}</td>
            <td>{{ $socio->fecha_termino }}</td>
            <td>{{ $socio->fecha_ingreso }}</td>
            <td>{{ $socio->estado }}</td>
            <td>
                <a href="{{ route('editar.socio', $socio->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('eliminar.socio', $socio->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $socios->links() }}
@endsection
