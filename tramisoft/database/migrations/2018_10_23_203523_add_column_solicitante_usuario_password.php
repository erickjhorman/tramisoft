<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnSolicitanteUsuarioPassword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitantes', function (Blueprint $table) {
            
            $table->string('usuario')->after('idEps');
            $table->binary('contraseña')->after('usuario') ;
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
        chema::table('solicitantes', function (Blueprint $table) {
            
            $table->dropColumn('usuario');
            $table->binary('contraseña');
            
          });
    }
}
