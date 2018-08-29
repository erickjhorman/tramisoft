<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estratos', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:tramisoft/database/migrations/catalogos/2018_08_23_220019_create_estratos_table.php
             $table->integer('nivel');
=======
            $table->string('nivel');
>>>>>>> desarrollo:tramisoft/database/migrations/catalogos/2018_08_23_220019_create_estratos_table.php
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
        Schema::dropIfExists('estratos');
    }
}
