<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('ciudads', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->integer('idDepartamento');
<<<<<<< HEAD:tramisoft/database/migrations/catalogos/2018_08_23_220010_create_ciudads_table.php
            $table->string('nombre');
=======
>>>>>>> desarrollo:tramisoft/database/migrations/catalogos/2018_08_23_220010_create_ciudads_table.php
=======
            
            // LLave foranea
            $table->unsignedInteger('idDepartamento');
            $table->foreign('idDepartamento')->references('id')->on('departamentos');

           
            $table->string('nombre');
>>>>>>> desarrollo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudads');
    }
}
