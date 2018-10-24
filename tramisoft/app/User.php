<?php

namespace tramisoft;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    //no borrar por nada del mundo
     use Notifiable;

   protected $table = 'usuarios';

    protected $fillable = [
        'nombreEmp', 'apellidoEmp','idenficicaionEmp' ,'correoEmp', 'contrasenaEmp',
    ];

    protected $hidden = [
        'contrasenaEmp',
    ];

    public function getAuthPassword () {

        return $this->contrasenaEmp;

    }
}
