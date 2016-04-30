<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Periodo;

class PeriodosController extends Controller
{
    public function index ()
    {
        $periodos = Periodo::with(['elementos' => function ($query) {
            $query->with('tipo','subtipo','estado','serie')->orderBy('id','asc')->get();
        }])->orderBy('id','asc')->get();

        return response()->json($periodos->toArray());
    }

    public function show ($id)
    {
        $periodo = Periodo::findOrFail($id);
        return response()->json($periodo);
    }
}
