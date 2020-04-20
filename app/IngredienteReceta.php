<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredienteReceta extends Model
{
    protected $table = 'ingrediente_receta';
    public $timestamps = false;
    protected $fillable = [
        'cantidad',
        'unidad',
        'receta_id',
        'ingrediente_id',
    ];

    public function Ingrediente(){
        return $this->belongsTo('App\Ingrediente');
    }
}
