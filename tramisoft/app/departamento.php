<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'departamentos'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre','idNaciolidad']; // Especicamos el nombre del campos
}
