<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function store(Request $request)
    {
        // Validar el email
        $request->validate([
            'email' => 'required|email|unique:info,email'
        ]);

        // Guardar en la base de datos
        Info::create([
            'email' => $request->email
        ]);

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('success2', '¡Tu correo se mando correctamente!');
    }
}
