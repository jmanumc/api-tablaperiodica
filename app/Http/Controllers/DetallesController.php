<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Detalle;

class DetallesController extends Controller
{
    public function index ()
    {
        $detalles = Detalle::orderBY('id','asc')->get();
        return response()->json($detalles->toArray());
    }

    public function show ($id)
    {
        $detalle = Detalle::findOrFail($id);
        return response()->json($detalle);
    }
}
