<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table = 'socios'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre', 
        'apellido', 
        'rut', 
        'direccion', 
        'email', 
        'telefono', 
        'monto_mensualidad', 
        'fecha_termino', 
        'fecha_ingreso', 
        'estado'
    ]; // Lista de campos que se pueden asignar masivamente

    // Si los campos 'fecha_ingreso' y 'fecha_termino' no son de tipo timestamp en la base de datos,
    // deberás especificar su tipo en la propiedad $dates
    protected $dates = ['fecha_ingreso', 'fecha_termino'];
}
