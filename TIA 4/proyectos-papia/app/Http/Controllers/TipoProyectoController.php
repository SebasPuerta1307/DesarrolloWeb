<?php

namespace App\Http\Controllers;

use App\Models\TipoProyectos;
use Illuminate\Http\Request;

class TipoProyectoController extends Controller
{
    public function index()
    {
        $tipos = TipoProyectos::all();
        return view('tipoproyecto', compact('tipos'));
    }

    // No necesitas los otros métodos (create, store, etc.) para este punto
}
