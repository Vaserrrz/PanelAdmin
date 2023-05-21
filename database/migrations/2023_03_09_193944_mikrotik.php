<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mikrotiks', function(Blueprint $table){
            $table->id('id');
            $table->string('mk_nombre', 50);
            $table->string('mk_ip', 100);
            $table->string('mk_serial', 50);
            $table->string('mk_identify', 50);
            $table->string('mk_model', 50);
            $table->string('mk_vpn_user', 20);
            $table->string('mk_vpn_password', 30);
            $table->string('mk_vpn_server', 50);
            $table->string('mk_ethr_corte1', 50);
            $table->string('mk_ethr_corte2', 50);
            $table->string('mk_usuario');
            $table->string('mk_clave', 50);
            $table->string('mk_puerto', 50);
            $table->string('mk_protocolo', 50);
            /*$table->string('MK_IDREMOTASAT	', 50);*/
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mikrotiks');
    }
};
