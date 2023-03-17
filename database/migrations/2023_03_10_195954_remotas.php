<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Routing\Matching\SchemeValidator;
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
        Schema::create('Remotas', function(Blueprint $table){
            $table->id('id')->bigint()->autoIncrement();
            $table->string('REMOTA_NODO', 100);
            // $table->foreignId->(CLIENTE_ID);
            $table->string('REMOTA_EQUIPO', 100);
            $table->string('REMOTA_SERIAL', 100);
            $table->string('REMOTA_COORDENADA', 100);
            $table->string('REMOTA_BUC', 100);
            $table->string('REMOTA_BUC_SERIAL', 100);
            $table->string('REMOTA_LNB', 100);
            $table->string('REMOTA_LNB_SERIAL');
            //$table->foreignID('PLAN_ID');
            $table->boolean('REMOTA_PLANDOWN')->nullable();
            $table->boolean('REMOTA_PLANUP')->nullable();
            //$table->foreignID('PROVEEDOR_ID');
            $table->string('REMOTA_COSTO_PLAN', 100);
            $table->string('REMOTA_RENTA', 100);
            $table->date('REMOTA_DIA_CORTE')->nullable();
            $table->date('REMOTA_DIA_ACTIVACION')->nullable();
            $table->string('REMOTA_DETALLE', 100)->nullable();
            $table->string('REMOTA_PLATO', 100);
            $table->string('REMOTA_IP_MODEM', 100);
            $table->string('REMOTA_IP_GESTION', 100);
            //$table->foreignID('SOCIO_ID');
            //$table->foreignID('REVENDEDOR_ID');
            //$table->foreignID('ENCARGADO_ID');
            $table->boolean('REMOTA_STATUS')->nullable();
            $table->string('REMOTA_BONDA', 100)->nullable();
            //$table->foreignID('SATELITE_ID');
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
        Schema::dropIfExists('Remotas');
    }
};
