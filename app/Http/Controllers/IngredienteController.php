<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller{

    public function index(){
        $ingredientes = Ingrediente::get();
        return Response()->json($ingredientes, 200);
    }

    public function getById($id){
        $ingrediente = Ingrediente::find($id);
        
        return Response()->json($ingrediente, 200);
    }

    public function store(Request $request){
        $input = $request->all();
        $ingrediente = Ingrediente::create($input);
        return Response()->json($ingrediente, 201);
    }

}
