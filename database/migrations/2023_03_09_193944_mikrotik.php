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
            $table->id('id')->bigint(10)->autoIncrement();
            $table->string('MK_NOMBRE', 50);
            $table->string('MK_IP', 100);
            $table->string('MK_SERIAL', 50);
            $table->string('MK_IDENTITY', 50);
            $table->string('MK_MODEL', 50);
            $table->string('MK_VPNUSER', 50);
            $table->string('MK_VPNPASSWORD', 50);
            $table->string('MK_VPNSERVER', 50);
            $table->string('MK_ETHRCORTE1', 50);
            $table->string('MK_ETHRCORTE2', 50);
            $table->string('MK_USUARIO');
            $table->string('MK_CLAVE', 50);
            $table->string('MK_PUERTO', 50);
            $table->string('MK_PROTOCOLO', 50);
            /*$table->string('MK_IDREMOTASAT	', 50);*/
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
        Schema::dropIfExists('Mikrotiks');
    }
};
