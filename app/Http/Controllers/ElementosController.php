<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Elemento;

class ElementosController extends Controller
{
    public function index ()
    {
    	$elementos = Elemento::with('tipo','subtipo','estado','serie')->get();
    	return response()->json($elementos->toArray());
    }

    public function show ($id)
    {
    	$elemento = Elemento::find($id);
    	$elemento->tipo;
    	$elemento->subtipo;
    	$elemento->estado;
    	$elemento->serie;
    	$elemento->grupo;
    	$elemento->bloque;
    	$elemento->periodo;
    	return response()->json($elemento);
    }
}
