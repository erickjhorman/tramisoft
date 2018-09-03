<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class tipoIdentificacion extends Model
{
    protected $table = 'tipo_identificacions'; // Especifico el nombre de la tabla 
    protected $fillable =['id','tipoIdentificacion']; // Especicamos el nombre del campo
}
