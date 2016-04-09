<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subtipo;

class SubtiposController extends Controller
{
    public function index ()
    {
    	$subtipos = Subtipo::with('elementos.tipo','elementos.subtipo','elementos.estado','elementos.serie')
            ->orderBY('id','asc')
            ->get();
    	return response()->json($subtipos->toArray());
    }

    public function show ($id)
    {
    	$subtipo = Subtipo::findOrFail($id);
    	return response()->json($subtipo);
    }
}
