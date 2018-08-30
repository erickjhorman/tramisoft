<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class ocupacion extends Model
{
    protected $table = 'ocupacions'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre']; // Especicamos el nombre del campo
}
