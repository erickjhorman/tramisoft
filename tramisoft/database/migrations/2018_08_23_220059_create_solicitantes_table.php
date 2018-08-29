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
<<<<<<< HEAD
<<<<<<< HEAD
            $table->integer('idPersona');
=======
            $table->integer('idPersona')->nullable();
>>>>>>> desarrollo
=======
            $table->unsignedInteger('idPersona')->nullable();
>>>>>>> desarrollo
            $table->integer('idIdentificacion');
            $table->string('numeroIdentificacion');
            $table->integer('idGenero');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
<<<<<<< HEAD
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
=======
            $table->string('telefono')->nullable();
            $table->string('correo');
            $table->timestamp('fechaR');
<<<<<<< HEAD
            $table->integer('idNacionalidad');
            $table->integer('idDepartamento');
            $table->integer('idCiudad');
            $table->integer('idComuna')->nullable();
            $table->integer('idBarrio')->nullable();
            $table->integer('idVivienda')->nullable();
            $table->integer('idEstrato')->nullable();
            $table->integer('idEstadoCivil')->nullable();
            $table->integer('idOcupacion')->nullable();
            $table->integer('idEps')->nullable();
>>>>>>> desarrollo
=======
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
