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
            $table->id('id');
            $table->string('REMOTA_NODO', 100);


            $table->unsignedBigInteger('CLIENTE_ID');

            $table->foreign('CLIENTE_ID')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('REMOTA_EQUIPO', 100);
            $table->string('REMOTA_SERIAL', 100);
            $table->string('REMOTA_COORDENADA', 100);
            $table->string('REMOTA_BUC', 100);
            $table->string('REMOTA_BUC_SERIAL', 100);
            $table->string('REMOTA_LNB', 100);
            $table->string('REMOTA_LNB_SERIAL');




            $table->integer('REMOTA_PLANDOWN')->nullable();
            $table->integer('REMOTA_PLANUP')->nullable();



            $table->string('REMOTA_COSTO_PLAN', 100);
            $table->string('REMOTA_RENTA', 100);
            $table->date('REMOTA_DIA_CORTE')->nullable();
            $table->date('REMOTA_DIA_ACTIVACION')->nullable();
            $table->string('REMOTA_DETALLE', 100)->nullable();
            $table->string('REMOTA_PLATO', 100);
            $table->string('REMOTA_IP_MODEM', 100);
            $table->string('REMOTA_IP_GESTION', 100);



            $table->unsignedBigInteger('PLAN_ID');

            $table->foreign('PLAN_ID')
                ->references('id')
                ->on('plans')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->unsignedBigInteger('PROVEEDOR_ID');

            $table->foreign('PROVEEDOR_ID')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('SOCIO_ID');

            $table->foreign('SOCIO_ID')
                ->references('id')
                ->on('socios')
                ->onDelete('cascade')
                ->onUpdate('cascade');



            $table->unsignedBigInteger('RESELLER_ID');

            $table->foreign('RESELLER_ID')
                ->references('id')
                ->on('revendedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->unsignedBigInteger('ENCARGADO_ID');

            $table->foreign('ENCARGADO_ID')
                ->references('id')
                ->on('encargados')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->boolean('REMOTA_STATUS')->nullable();
            $table->string('REMOTA_BONDA', 100)->nullable();


            $table->unsignedBigInteger('SATELITE_ID');
            $table->foreign('SATELITE_ID')
                ->references('id')
                ->on('satelites')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
