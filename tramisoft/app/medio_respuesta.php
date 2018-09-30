<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class medio_respuesta extends Model
{
     protected $table = 'medio_respuestas.php'; // Especifico el nombre de la tabla 
     protected $fillable = ['nombre','id']; // Especicamos el nombre del campos
}
