<?php

namespace App\Http\Controllers;

use App\IngredienteReceta;
use Illuminate\Http\Request;

class IngredienteRecetaController extends Controller{
    public function index($receta_id){
        $ingredientes = IngredienteReceta::where('receta_id', $receta_id)->get();
        foreach($ingredientes as $ingrediente) $ingrediente->ingrediente;
        return Response()->json($ingredientes, 200);
    }

    public function getById($receta_id, $id){
        $ingredientes = IngredienteReceta::where('receta_id', $receta_id)->where('id', $id)->get();
        $ingrediente = $ingredientes[0];
        return Response()->json($ingrediente, 201);
    }

    public function store(Request $request){
        $input = $request->all();
        $ingrediente = IngredienteReceta::create($input);
        return Response()->json($ingrediente, 201);
    }
}
