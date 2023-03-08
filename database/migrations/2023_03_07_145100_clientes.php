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
        Schema::create('CLientes', function(Blueprint $table){

            $table->id('id')->autoIncrement();
            $table->integer('CI_RIF')->default(20);
            $table->string('CLIENTE_RAZON', 100);
            $table->string('CLIENTE_DIRECCION', 100);
            $table->string('CLIENTE_DETALLE');
            $table->string('CLIENTE_TELF', 20);
            $table->string('CLIENTE_TELF2', 20)->nullable();
            $table->string('CLIENTE_WHATSAPP', 20)->nullable();
            $table->string('CLIENTE_TELEGRAM', 20)->nullable();
            $table->string('CLIENTE_CORREO', 20)->nullable();
            $table->boolean('STATUS')->nullable();
            $table->boolean('ENVIO_TELEGRAM')->nullable();
            $table->boolean('ENVIO_WHATSAPP')->nullable();

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
        Schema::dropIfExists('Clientes');
    }
};
