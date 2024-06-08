<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('rut');
            $table->string('direccion');
            $table->string('email');
            $table->string('telefono');
            $table->decimal('monto_mensualidad', 8, 2);
            $table->date('fecha_termino');
            $table->timestamp('fecha_ingreso')->useCurrent();
            $table->string('estado')->default('activo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socios');
    }
}