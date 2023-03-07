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
            $table->id('ENCARGADO_ID')->autoIncrement();
            $table->string('ENCARGADO_NOMBRE');
            $table->integer('ENCARGADO_TELF');
            $table->string('ENCARGADO_CORREO', 100)->unique();
            $table->boolean('ENVIO_TELEGRAM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
