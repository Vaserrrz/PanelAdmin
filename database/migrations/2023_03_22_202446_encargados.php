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
        Schema::create('Encargados', function(Blueprint $table){

            $table->id('id');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('ENCARGADO_NOMBRE');
            $table->string('ENCARGADO_TELF', 20);

            $table->string('ENCARGADO_CORREO', 100)->unique();
            $table->string('ENVIO_TELEGRAM')->nullable();
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
        Schema::dropIfExists('Encargados');
    }
};