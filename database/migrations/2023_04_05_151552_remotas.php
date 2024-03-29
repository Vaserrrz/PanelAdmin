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

            //CAMPOS VALIDADOS
            $table->string('REMOTA_NODO', 100);
            $table->unsignedBigInteger('CLIENTE_ID');
            $table->foreign('CLIENTE_ID')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('REMOTA_EQUIPO', 100);
            $table->string('REMOTA_SERIAL', 100);

            $table->unsignedBigInteger('PROVEEDOR_ID');
            $table->foreign('PROVEEDOR_ID')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('SATELITE_ID');
            $table->foreign('SATELITE_ID')
                ->references('id')
                ->on('satelites')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('PLAN_ID');
            $table->foreign('PLAN_ID')
                ->references('id')
                ->on('plans')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //CAMPOS NO VALIDADOS
            $table->string('REMOTA_COORDENADA', 100)->nullable();
            $table->string('REMOTA_BUC', 100)->nullable();
            $table->string('REMOTA_BUC_SERIAL', 100)->nullable();
            $table->string('REMOTA_LNB', 100)->nullable();
            $table->string('REMOTA_LNB_SERIAL')->nullable();
            $table->string('REMOTA_KIT_SERIAL')->nullable();
            $table->string('REMOTA_ANTENA_SERIAL')->nullable();
            $table->integer('REMOTA_PLANDOWN')->nullable();
            $table->integer('REMOTA_PLANUP')->nullable();
            $table->string('REMOTA_COSTO_PLAN', 100);
            $table->string('REMOTA_RENTA', 100);
            $table->date('REMOTA_DIA_CORTE');
            $table->date('REMOTA_DIA_ACTIVACION');
            $table->date('REMOTA_FECHA_CUENTA')->nullable();
            $table->string('REMOTA_DETALLE', 300)->nullable();
            $table->string('REMOTA_PLATO', 100)->nullable();
            $table->string('REMOTA_IP_MODEM', 100)->nullable();
            $table->string('REMOTA_IP_GESTION', 100)->nullable();
            $table->boolean('REMOTA_STATUS')->nullable();
            $table->string('REMOTA_BONDA', 100)->nullable();
            $table->unsignedBigInteger('SOCIO_ID')->nullable();
            $table->foreign('SOCIO_ID')
                ->references('id')
                ->on('socios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('RESELLER_ID')->nullable();
            $table->foreign('RESELLER_ID')
                ->references('id')
                ->on('revendedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('ENCARGADO_ID')->nullable();
            $table->foreign('ENCARGADO_ID')
                ->references('id')
                ->on('encargados')
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
