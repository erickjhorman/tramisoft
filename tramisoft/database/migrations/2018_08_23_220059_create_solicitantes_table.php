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
            $table->integer('idPersona');
=======
            $table->integer('idPersona')->nullable();
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
