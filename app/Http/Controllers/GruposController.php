<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Grupo;

class GruposController extends Controller
{
    public function index () {
    	$grupos = Grupo::with('elementos.tipo','elementos.subtipo','elementos.estado')->get();
    	return response()->json($grupos->toArray());
    }

    public function show ($id) {
    	$grupo = Grupo::findOrFail($id);
    	return response()->json($grupo);
    }
}
