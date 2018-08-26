<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNacionalidadIdToDepartamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departamentos', function (Blueprint $table) {
            $table->dropColumn('idNacionalidad');
            $table->unsignedInteger('nacionalidad_id');
        });

    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departamentos', function (Blueprint $table) {
            $table->dropColumn('nacionalidad_id');
            $table->string('idNacionalidad', 50)->nullable()->after('id');

        });
    }
}
