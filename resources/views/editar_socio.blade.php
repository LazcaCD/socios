<!-- resources/views/editar_socio.blade.php -->
@extends('layout')

@section('content')
<h2>Editar Socio</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('actualizar.socio', $socio->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $socio->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $socio->apellido }}" required>
    </div>
    <div class="form-group">
        <label for="rut">RUT:</label>
        <input type="text" class="form-control" id="rut" name="rut" value="{{ $socio->rut }}" required>
    </div>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $socio->direccion }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $socio->email }}" required>
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $socio->telefono }}" required>
    </div>
    <div class="form-group">
        <label for="monto_mensualidad">Monto Mensualidad:</label>
        <input type="number" class="form-control" id="monto_mensualidad" name="monto_mensualidad" value="{{ $socio->monto_mensualidad }}" required>
    </div>
    <div class="form-group">
        <label for="fecha_termino">Fecha Término:</label>
        <input type="date" class="form-control" id="fecha_termino" name="fecha_termino" value="{{ $socio->fecha_termino }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
