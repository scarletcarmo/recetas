<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    //Listar todos 
    public function index(){
        $recetas = Receta::get();
        return Response()->json($recetas, 200);
    }

    public function getById($id){
        $receta = Receta::find($id);
        return Response()->json($receta, 200);
    }

    public function store(Request $request){
        $input = $request->all();
        $receta = Receta::create($input);
        return Response()->json($receta, 201);
    }
}