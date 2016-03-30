<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bloque;

class BloquesController extends Controller
{
    public function index () {
        $bloques = Bloque::with('elementos.tipo','elementos.subtipo','elementos.estado','elementos.serie')->get();
        return response()->json($bloques->toArray());
    }

    public function show ($id) {
        $bloque = Bloque::findOrFail($id);
            return response()->json($bloque);
    }
}
