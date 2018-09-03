<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPersona')->nullable()->unsigned();
            $table->integer('idIdentificacion')->unsigned();
            $table->string('numeroIdentificacion');
            $table->integer('idGenero')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
            $table->string('telefono')->nullable();
            $table->string('correo');
            $table->integer('idNacionalidad')->unsigned();
            $table->integer('idDepartamento')->unsigned();
            $table->integer('idCiudad')->unsigned();
            $table->integer('idComuna')->nullable()->unsigned();
            $table->integer('idBarrio')->nullable()->unsigned();
            $table->integer('idVivienda')->nullable()->unsigned();
            $table->integer('idEstrato')->nullable()->unsigned();
            $table->integer('idEstadoCivil')->nullable()->unsigned();
            $table->integer('idOcupacion')->nullable()->unsigned();
            $table->integer('idEps')->nullable()->unsigned();
            $table->timestamps();

            //Llaves foraneas
            //Tabla personas
            
            $table->foreign('idPersona')->references('id')->on('tipo_personas');

             // Tabla identificacion
            
            $table->foreign('idIdentificacion')->references('id')->on('tipo_identificacions');

             // Tabla nacionalidad
            //$table->integer('idNacionalidad')
            $table->foreign('idNacionalidad')->references('id')->on('nacionalidads');

            // Tabla Departamento
             $table->foreign('idDepartamento')->references('id')->on('departamentos');

             // Tabla Ciudad
             $table->foreign('idCiudad')->references('id')->on('ciudads');

             // Tabla comuna
             $table->foreign('idComuna')->references('id')->on('comunas');

             // Tabla barrio
             $table->foreign('idBarrio')->references('id')->on('barrios');

             // Tabla viviendas
             $table->foreign('idVivienda')->references('id')->on('viviendas');

             // Tabla Estrato
             $table->foreign('idEstrato')->references('id')->on('estratos');

              // Tabla Estado civil
             $table->foreign('idEstadoCivil')->references('id')->on('estado_civils');

               // Tabla Ocupacion
             $table->foreign('idOcupacion')->references('id')->on('ocupacions');

              // Tabla Genero
             $table->foreign('idGenero')->references('id')->on('generos');

              // Tabla Eps
             $table->foreign('idEps')->references('id')->on('eps');

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitantes');
    }
}
