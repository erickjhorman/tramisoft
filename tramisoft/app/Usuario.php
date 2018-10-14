<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $fillable = [
        'nombreEmp', 'apellidoEmp','idenficicaionEmp' ,'correoEmp', 'contrasenaEmp',
    ];
    
	public function rol()
	{
		return $this->belongsTo("tramisoft\Rol");
	}

     
}
