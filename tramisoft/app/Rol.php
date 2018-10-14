<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
     protected $fillable = [
        'nombreRol',
    ];
    public function usuario()
	{
		return $this->hasOne("tramisoft\Usuario");
	}
}
