<?php

namespace tramisoft;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'departamentos'; // Especifico el nombre de la tabla 
    protected $fillable = ['nombre','idNacionalidad']; // Especicamos el nombre del campos

// // Crear metodo para traer todos los datos filtrados
//     public static function depar($id){
//     	return departamento::where('idNacionalidad','=',$id)->get();
    	
//     }


}
