<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Serie;

class SeriesController extends Controller
{
    public function index ()
    {
        $series = Serie::with(['elementos' => function ($query) {
            $query->with('tipo','subtipo','estado','serie')->orderBy('id','asc')->get();
        }])->orderBy('id','asc')->get();

    	return response()->json($series->toArray());
    }

    public function show ($id)
    {
    	$serie = Serie::findOrFail($id);
    	return response()->json($serie);
    }
}
