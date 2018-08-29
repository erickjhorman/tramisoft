<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:tramisoft/database/migrations/catalogos/2018_08_23_224921_create_departamentos_table.php
            $table->integer('idNacionalidad');
=======
           
            // LLave foranea
            $table->unsignedInteger('idNacionalidad');
            $table->foreign('idNacionalidad')->references('id')->on('nacionalidads');
            
>>>>>>> desarrollo:tramisoft/database/migrations/catalogos/2018_08_23_224921_create_departamentos_table.php
            $table->string('nombre');
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
        Schema::dropIfExists('departamentos');
    }
}
