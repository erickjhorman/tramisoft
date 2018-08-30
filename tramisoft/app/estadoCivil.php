<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class estadoCivil extends Model
{
    protected $table = 'estado_civils'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre']; // Especicamos el nombre del campo
}
