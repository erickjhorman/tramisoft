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
            $table->integer('idPersona')->nullable();
            $table->integer('idIdentificacion');
            $table->string('numeroIdentificacion');
            $table->integer('idGenero');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
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
