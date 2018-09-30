<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class tramite--migration extends Model
{
    protected $table = 'catalogo_tramite'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre','id']; // Especicamos el nombre del campos
}
