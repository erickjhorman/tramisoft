<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class barrio extends Model
{
    protected $table = 'barrios'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre','idcomuna']; // Especicamos el nombre del campos
}
