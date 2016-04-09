<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tipo;

class TiposController extends Controller
{
    public function index ()
    {
    	$tipos = Tipo::with('elementos.tipo','elementos.subtipo','elementos.estado','elementos.serie')
            ->orderBY('id','asc')
            ->get();
    	return response()->json($tipos->toArray());
    }

    public function show ($id)
    {
    	$tipo = Tipo::findOrFail($id);
    	return response()->json($tipo);
    }
}
