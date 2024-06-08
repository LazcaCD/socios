<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\DonacionesController;


Route::get('/ver-socios', [SocioController::class, 'index'])->name('ver.socios');
Route::get('/editar-socio/{id}', [SocioController::class, 'edit'])->name('editar.socio');
Route::post('/actualizar-socio/{id}', [SocioController::class, 'update'])->name('actualizar.socio');
Route::delete('/eliminar-socio/{id}', [SocioController::class, 'destroy'])->name('eliminar.socio');
Route::get('/cambiar-estado', [DonacionesController::class, 'mostrarCambiarEstado'])->name('cambiar.estado');
Route::put('/cambiar-estado/{id}', [DonacionesController::class, 'cambiarEstado'])->name('cambiar.estado');


Route::get('/', function () {
    return view('ejemplo.index');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class, 'login'])->name('usuario.login');

Route::get('/nuevo-socio', function () {
    return view('nuevo');
})->name('nuevo.socio');

Route::post('/nuevo-socio', function (Request $request) {
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'rut' => 'required|string|max:12',
        'direccion' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefono' => 'required|string|max:15',
        'monto_mensualidad' => 'required|numeric',
        'fecha_termino' => 'required|date',
    ]);

    DB::table('socios')->insert([
        'nombre' => $request->input('nombre'),
        'apellido' => $request->input('apellido'),
        'rut' => $request->input('rut'),
        'direccion' => $request->input('direccion'),
        'email' => $request->input('email'),
        'telefono' => $request->input('telefono'),
        'monto_mensualidad' => $request->input('monto_mensualidad'),
        'fecha_termino' => $request->input('fecha_termino'),
        'fecha_ingreso' => now(),
        'estado' => 'activo',
    ]);

    return redirect()->route('nuevo.socio')->with('success', 'Socio creado exitosamente.');
});



Route::get('/donaciones', [DonacionesController::class, 'mostrarMenuDonaciones']);

