<?php

namespace App\Http\Controllers;

use App\Preparacion;
use Illuminate\Http\Request;

class PreparacionController extends Controller{
    public function index($receta_id){
        $preparaciones = Preparacion::where('receta_id', $receta_id)->get();
        return Response()->json($preparaciones, 200);
    }

    public function getById($receta_id, $id){
        $preparaciones = Preparacion::where('receta_id', $receta_id)->where('id', $id)->get();
        $preparacion = $preparaciones[0];
        return Response()->json($preparacion, 200);
    }

    public function store(Request $request){
        $input = $request->all();
        $preparacion = Preparacion::create($input);
        return Response()->json($preparacion, 201);
    }
}