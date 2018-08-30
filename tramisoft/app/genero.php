<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    protected $table = 'generos'; // Especifico el nombre de la tabla 
    protected $fillable = ['tipoGenero']; // Especicamos el nombre del campo
}
