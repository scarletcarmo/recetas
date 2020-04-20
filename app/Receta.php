<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'receta';
    public $timestamps = false;
    protected $fillable = [
        'nombre'
    ];
    
    public function IngredienteReceta()
    {
        return $this->hasMany('App\IngredienteReceta');
    }
}
