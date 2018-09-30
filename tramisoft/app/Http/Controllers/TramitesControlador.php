<?php

namespace tramisoft\Http\Controllers;
//use request;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class TramitesControlador extends Controller
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
        
         //Consulta de id, nombre y numero de identificacion
       
           $solicitantes = DB::select('select id,nombre,apellido, numeroIdentificacion from solicitantes where id =(SELECT max(id) FROM solicitantes)');

       

         
          
          //return  $solicitantes; Retornar lo que trae la consulta
        
          $Tramite = DB::table('catalogo_tramites')->select('nombre','id')->get();
          $medioRespuestas = DB::table('medio_respuestas')->select('nombre','id')->get();



        return view('tramite.create', compact('Tramite', 'medioRespuestas', 'solicitantes'));
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
