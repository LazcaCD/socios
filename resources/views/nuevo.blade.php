<!-- resources/views/nuevo.blade.php -->
@extends('layout')

@section('content')
<h2>Formulario de Nuevo Socio</h2>

<!-- Mostrar mensaje de éxito -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ url('/nuevo-socio') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
    </div>
    <div class="form-group">
        <label for="rut">RUT:</label>
        <input type="text" class="form-control" id="rut" name="rut" required>
    </div>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" required>
    </div>
    <div class="form-group">
        <label for="monto_mensualidad">Monto Mensualidad:</label>
        <input type="number" class="form-control" id="monto_mensualidad" name="monto_mensualidad" required>
    </div>
    <div class="form-group">
        <label for="fecha_termino">Fecha Término:</label>
        <input type="date" class="form-control" id="fecha_termino" name="fecha_termino" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
