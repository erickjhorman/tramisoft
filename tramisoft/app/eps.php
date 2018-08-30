<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class eps extends Model
{
    protected $table = 'eps'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre']; // Especicamos el nombre del campo
}
