<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Estado;

class EstadosController extends Controller
{
    public function index () {
    	$estados = Estado::with('elementos.tipo','elementos.subtipo','elementos.estado','elementos.serie')->get();
    	return response()->json($estados->toArray());
    }

    public function show ($id) {
    	$estado = Estado::findOrFail($id);
    	return response()->json($estado);
    }
}
