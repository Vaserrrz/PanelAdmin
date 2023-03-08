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
            $table->id('id')->autoIncrement();
            $table->string('ENCARGADO_NOMBRE');
            $table->string('ENCARGADO_TELF', 20);
            $table->string('ENCARGADO_CORREO', 100)->unique();
            $table->boolean('ENVIO_TELEGRAM')->nullable();
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
