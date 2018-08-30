<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class estrato extends Model
{

    protected $table = 'estratos'; // Especifico el nombre de la tabla 
    protected $fillable = ['nivel']; // Especicamos el nombre del campo//
}
