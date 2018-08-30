<?php

namespace tramisoft\Http\Controllers;
//use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
// use App\departamento;



class SolicitanteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Nacionalidades = DB::table('nacionalidads')->select('nombre','id')->get();
        /** Creamos una variable donde guardamos la lista del modelo con los datos obtenidos de base de datos*/
        
        $tipopersona = DB::table('tipo_personas')->select('nombre','id')->get();
        $Departamentos = DB::table('departamentos')->select('nombre','id')->get();
        $identificacion = DB::table('tipo_identificacions')->select('tipoIdentificacion','id')->get();
        $genero = DB::table('generos')->select('tipoGenero','id')->get();
        $comunas = DB::table('comunas')->select('comunaNivel','id')->get();
        $viviendas = DB::table('viviendas')->select('tipoVivienda','id')->get();
        $estratos = DB::table('estratos')->select('nivel','id')->get();
        $estadoCivil = DB::table('estado_civils')->select('nombre','id')->get();
        $ocupacion = DB::table('ocupacions')->select('nombre','id')->get();
        $eps = DB::table('eps')->select('nombre','id')->get();
        
        
        return view('Solicitante.create', compact('tipopersona','Nacionalidades','Departamentos' , 'identificacion','genero','comunas','viviendas' ,'estratos','estadoCivil','ocupacion','eps'));

         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $Solicitante = new solicitante();  /** Se hace una instancia del modelo solicitante*/
        
        $Solicitante->tipoPersona =$request->input('tipopersona');
        $Solicitante->identificacion =$request->input('identificacion');
        $Solicitante->genero =$request->input('genero');
        $Solicitante->nombre =$request->input('nombre');
        $Solicitante->numero =$request->input('numero');
        $Solicitante->apellido =$request->input('apellido'); 
        $Solicitante->celular =$request->input('celular');
        $Solicitante->correo =$request->input('correo'); 
        $Solicitante->nacionalidad =$request->input('nacionalidad');  
        $Solicitante->departamento =$request->input('departamento'); 
        $Solicitante->ciudad =$request->input('ciudad'); 
       
        $Solicitante->save();

        /**return $request->all(); 
        /** Este metodo retorna todo el request 
        return $request->input('identificacion');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
