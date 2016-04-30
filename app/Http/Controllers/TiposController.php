<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tipo;

class TiposController extends Controller
{
    public function index ()
    {
        $tipos = Tipo::with(['elementos' => function ($query) {
            $query->with('tipo','subtipo','estado','serie')->orderBy('id','asc')->get();
        }])->orderBy('id','asc')->get();

    	return response()->json($tipos->toArray());
    }

    public function show ($id)
    {
    	$tipo = Tipo::findOrFail($id);
    	return response()->json($tipo);
    }
}
