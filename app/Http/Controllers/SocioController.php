<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Socio; 

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::paginate(10);
        return view('ver_socios', compact('socios'));
    }


    public function edit($id)
    {
        $socio = DB::table('socios')->where('id', $id)->first();
        return view('editar_socio', compact('socio'));
    }

    public function update(Request $request, $id)
    {
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

        DB::table('socios')->where('id', $id)->update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'rut' => $request->input('rut'),
            'direccion' => $request->input('direccion'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'monto_mensualidad' => $request->input('monto_mensualidad'),
            'fecha_termino' => $request->input('fecha_termino'),
            'updated_at' => now(),
        ]);

        return redirect()->route('ver.socios')->with('success', 'Socio actualizado exitosamente.');
    }

    public function destroy($id)
    {
        DB::table('socios')->where('id', $id)->delete();
        return redirect()->route('ver.socios')->with('success', 'Socio eliminado exitosamente.');
    }
}
