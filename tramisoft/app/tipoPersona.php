<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class tipoPersona extends Model
{
    protected $table = 'tipo_personas'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre','id']; // Especicamos el nombre del campo
}
