<?php

namespace tramisoft\Http\Controllers\perfil;

use Illuminate\Http\Request;
use tramisoft\Http\Controllers\Controller;

class PerfilControlador extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth',['only'=>'index']);
    }
    public function index()
	{
		return view('perfil.index');
	}
}
