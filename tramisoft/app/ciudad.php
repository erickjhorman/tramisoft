<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    protected $table = 'ciudads'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre','id']; // Especicamos el nombre del campo
}
