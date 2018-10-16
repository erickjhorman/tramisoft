<?php

namespace tramisoft\Http\Controllers\UsuarioPerfil;

use Illuminate\Http\Request;
use tramisoft\Http\Controllers\Controller;
use tramisoft\Usuario;
use tramisoft\Rol;
use DB;


class PerfilUsuarioControlador extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth',['only'=>'index']);
    }

    public function index()
    {
        $cargos  = Rol::All();
        $datos = DB::select("select * from usuarios,rols where usuarios.rol_id=rols.id");  
    	return view('Usuario.index')->with('datos',$datos)->with('cargos',$cargos);

    }
    public function create()
    {
    	
    }
}
