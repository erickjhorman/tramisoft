<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnSolicitantePassword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('solicitantes', function (Blueprint $table) {
            
            $table->binary('contraseña')->after('idEps') ;
            $table->rememberToken();
            
          });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('solicitantes', function (Blueprint $table) {
            
            $table->dropColumn('usuario');
           
            
          });

    }
}
