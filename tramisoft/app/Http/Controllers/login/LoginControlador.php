<?php

namespace tramisoft\Http\Controllers\login;

use Illuminate\Http\Request;
use tramisoft\Http\Controllers\Controller;
use Auth;
use tramisoft\User;
use tramisoft\Usuario;
use tramisoft\Rol;

class LoginControlador extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('guest',['only'=>'index']);
    }
    public function index()
    {
    	return view('Login.index');
    }
    public function login()
    {
    	$credentials =  $this->validate(request(),[//se validan qe la informacion en los campos de textos sean correctos

	       $this->userName() => 'required|string',
	       $this->getAuthPassword() => 'required|string'
       ]);

    	if (Auth::attempt(['correoEmp'=> $credentials['correoEmp'] , 'password' => $credentials['contrasenaEmp'] ])) {//se autentica en la tabla users
    

            return view('perfil.index');
        }
        else{

        return back()->withErrors([$this->userName() => 'Estas cretenciales no concuerdan con nustros registros'])->withInput(request([$this->userName()]));
    
        }

    }
     public function logout()
    {
       
       Auth::logout();

       return redirect('inicio');

    }
    //metodo para encriptar las contraseñas
    public function encri(){
    Usuario::get()->map(function ($usuario) {
    return $usuario->update(['contrasenaEmp' => \Hash::make($usuario['contrasenaEmp'])]); 
    });

    }

    public function userName()
    {
        return 'correoEmp';
    }
    public function getAuthPassword () {

        return "contrasenaEmp";

    }
    public function getCargo()
    {
        $nivel = Usuario::where('correoEmp','brayancl098@gmail.com')->get();

         foreach ($nivel as $nive) {
             $ns = $nive->id;
        }
             $cargo = Usuario::find($ns)->rol->nombreRol;

        return $cargo;
    }

}

