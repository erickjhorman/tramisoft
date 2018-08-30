<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class comuna extends Model
{
    protected $table = 'comunas'; // Especifico el nombre de la tabla 
    protected $fillable = ['comunaNivel','id']; // Especicamos el nombre del campo
}
