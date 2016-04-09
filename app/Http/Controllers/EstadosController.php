<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Estado;

class EstadosController extends Controller
{
    public function index ()
    {
        $estados = Estado::with(['elementos' => function ($query) {
            $query->with('tipo','subtipo','estado','serie')->orderBy('id','asc')->get();
        }])->orderBy('id','asc')->get();

    	return response()->json($estados->toArray());
    }

    public function show ($id)
    {
    	$estado = Estado::findOrFail($id);
    	return response()->json($estado);
    }
}
