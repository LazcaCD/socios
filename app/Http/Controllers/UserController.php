<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $administrador = User::where('nombre_usuario', $request->nombre_usuario)->first();

        if ($administrador && $request->password == $administrador->clave)
        {
            dd("coincide");
        }
        else
        {
            dd("no coincide");
        }
    }
}
