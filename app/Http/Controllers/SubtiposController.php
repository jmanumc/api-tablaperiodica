<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Subtipo;

class SubtiposController extends Controller
{
    public function index ()
    {
        $subtipos = Subtipo::with(['elementos' => function ($query) {
            $query->with('tipo','subtipo','estado','serie')->orderBy('id','asc')->get();
        }])->orderBy('id','asc')->get();

    	return response()->json($subtipos->toArray());
    }

    public function show ($id)
    {
    	$subtipo = Subtipo::findOrFail($id);
    	return response()->json($subtipo);
    }
}
