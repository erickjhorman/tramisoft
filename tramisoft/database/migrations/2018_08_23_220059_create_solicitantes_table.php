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
            $table->unsignedInteger('idPersona')->nullable();
            $table->integer('idIdentificacion');
            $table->string('numeroIdentificacion');
            $table->integer('idGenero');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
            $table->string('telefono')->nullable();
            $table->string('correo');
            $table->timestamp('fechaR');
            $table->unsignedInteger('idNacionalidad');
            $table->unsignedInteger('idDepartamento');
            $table->unsignedInteger('idCiudad');
            $table->unsignedInteger('idComuna')->nullable();
            $table->unsignedInteger('idBarrio')->nullable();
            $table->unsignedInteger('idVivienda')->nullable();
            $table->unsignedInteger('idEstrato')->nullable();
            $table->unsignedInteger('idEstadoCivil')->nullable();
            $table->unsignedInteger('idOcupacion')->nullable();
            $table->unsignedInteger('idEps')->nullable();

            // Llaves foraneas
            // Tabla personas
            //$table->integer('idPersona')->nullable();
            $table->foreign('idPersona')->references('id')->on('tipo_personas');

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
