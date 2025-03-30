<?php

namespace App\Http\Controllers;

use App\Models\Consultor;
use Illuminate\Http\Request;

class ConsultorController extends Controller
{
    public function create()
    {
        return view('consultor.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'nullable|string|max:255',
            'email' => 'required|email',
            'celular' => 'required|numeric',
            'edad' => 'required|integer',
            'republica' => 'nullable|string|max:255',
            'consultor' => 'required|string|max:255',
            'motivo' => 'required|string',
        ]);

        Consultor::create([
            'nombre_completo' => $request->nombre_completo,
            'email' => $request->email,
            'celular' => $request->celular,
            'edad' => $request->edad,
            'republica' => $request->republica,
            'consultor' => $request->consultor,
            'motivo' => $request->motivo,
        ]);

        return redirect()->back()->with('success', 'Formulario enviado muchas gracias.');
    }
}
