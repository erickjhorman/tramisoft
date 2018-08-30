<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class nacionalidad extends Model
{
    protected $table = 'nacionalidads'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre']; // Especicamos el nombre del campo
}
