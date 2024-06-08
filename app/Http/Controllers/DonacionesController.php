<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socio;

class DonacionesController extends Controller
{
    public function mostrarMenuDonaciones()
    {
        // a. Número de socios inscritos hasta el momento
        $sociosCount = Socio::count();

        // b. Proyección de donaciones esperadas a un año
        $totalMensualidades = Socio::sum('monto_mensualidad');
        $proyeccionAnual = $totalMensualidades * 12;

        // c. Monto promedio de donación mensual
        if ($sociosCount > 0) {
            $promedioMensual = $totalMensualidades / $sociosCount;
        } else {
            $promedioMensual = 0;
        }

        return view('donaciones', [
            'sociosCount' => $sociosCount,
            'proyeccionAnual' => $proyeccionAnual,
            'promedioMensual' => $promedioMensual
        ]);
    }

    public function mostrarCambiarEstado()
    {
        $socios = Socio::all();
        return view('cambiar_estado', compact('socios'));
    }

    public function cambiarEstado($id)
    {
        $socio = Socio::find($id);
        $socio->estado = 'inactivo';
        $socio->save();
        return redirect()->back()->with('success', 'Estado del socio cambiado a inactivo correctamente.');
    }
}
