<?php
use tramisoft\Usuario;
use tramisoft\Rol;
use tramisoft\vivienda;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('solicitante','SolicitanteControlador');
Route::resource('tramite','TramitesControlador');
Route::resource('documentacion','DocumentacionControlador');

/* El recurso tramites es un nombre de una ruta dada  para poder acceder a los recursos del controlador*/

// Las route get me permite obtener los datos filtatos se especifica el recurso con la ide como parametro y el controlado y la funcion creada
Route::get('/json-departamentos','SolicitanteControlador@getDepartamentos');
Route::get('/json-ciudad','SolicitanteControlador@getCiudad');
Route::get('/json-tipoTramite','TramitesControlador@getTramite');
Route::get('/json-medioRespuesta','TramitesControlador@getTramite');
//getdepartamentos es el metodo creado en el modelo de la tabla

//rutas para el login
Route::get('inicio' , 'login\LoginControlador@index')->name('inicio');
Route::post('login', 'login\LoginControlador@login')->name('login');
Route::post('logout', 'login\LoginControlador@logout')->name('logout');
Route::get('inicio/perfil','perfil\PerfilControlador@index')->name('perfil');
//metodo para encriptar contraseñas ||  solo ejecutar 1 vez no recargar la pagina(actualizarla)
//Route::get('enc' , 'login\LoginControlador@encri');
//Rutas complementarias del mudulo
Route::get('perfil/usuario','UsuarioPerfil\PerfilUsuarioControlador@index')->name('perfilusuario');
Route::post('perfil/usuario','UsuarioPerfil\PerfilUsuarioControlador@create')->name('ingresarusuario');

Route::get('/conseguir', function(){


	$cargos  = Rol::All();

	foreach ($cargos as $cargo) {
		echo $cargo->nombreRol;
	
	}
});
