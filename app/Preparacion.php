<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparacion extends Model
{
    protected $table = 'preparacion';
    public $timestamps = false;
    protected $fillable = [
        'paso',
        'descripcion',
        'receta_id',
    ];
}
