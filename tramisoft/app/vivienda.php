<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class vivienda extends Model
{
    protected $table = 'viviendas'; // Especifico el nombre de la tabla 
    protected $fillable = ['tipoVivienda']; // Especicamos el nombre del campo
}
