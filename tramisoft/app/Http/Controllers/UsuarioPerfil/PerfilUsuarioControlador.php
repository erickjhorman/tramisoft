<?php

namespace tramisoft\Http\Controllers\UsuarioPerfil;

use Illuminate\Http\Request;
use tramisoft\Http\Controllers\Controller;

class PerfilUsuarioControlador extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth',['only'=>'index']);
    }

    public function index()
    {
    	return view('Usuario.index') ;
    }
    public function create()
    {
    	
    }
}
