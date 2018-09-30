<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramiteTablasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramite_tablas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Solicitante_id')->unsigned();
            $table->integer('CatalogoTramite_id')->unsigned();
            $table->integer('medioRespusta_id')->unsigned();
            $table->longText('Description')->nullable();
            $table->timestamps();


            //foreign key 

            $table->foreign('Solicitante_id')->references('id')->on('solicitantes');
            $table->foreign('CatalogoTramite_id')->references('id')->on('catalogo_tramites');
            $table->foreign('medioRespusta_id')->references('id')->on('medio_Respuestas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramite_tablas');
    }
}
