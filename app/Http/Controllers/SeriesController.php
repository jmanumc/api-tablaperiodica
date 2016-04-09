<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Serie;

class SeriesController extends Controller
{
    public function index ()
    {
    	$series = Serie::with('elementos.tipo','elementos.subtipo','elementos.estado','elementos.serie')
            ->orderBY('id','asc')
            ->get();
    	return response()->json($series->toArray());
    }

    public function show ($id)
    {
    	$serie = Serie::findOrFail($id);
    	return response()->json($serie);
    }
}
