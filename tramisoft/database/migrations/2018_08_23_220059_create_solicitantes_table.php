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
            $table->string('telefono');
            $table->string('correo');
            $table->timestamps('fechaR');
            $table->integer('idNacionalidad');
            $table->integer('idDepartamento');
            $table->integer('idCiudad');
            $table->integer('idComuna')->nullable()->change();;
            $table->integer('idBarrio')->nullable()->change();;
            $table->integer('idVivienda')->nullable()->change();;
            $table->integer('idEstrato')->nullable()->change();;
            $table->integer('idEstadoCivil')->nullable()->change();;
            $table->integer('idOcupacion')->nullable()->change();;
            $table->integer('idEps')->nullable()->change();;


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
>>>>>>> desarrollo
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
