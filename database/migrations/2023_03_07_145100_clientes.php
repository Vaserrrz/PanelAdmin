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
            $table->integer('ci_rif')->default(20);
            $table->string('razon', 100);
            $table->string('direccion', 100);
            $table->string('observacion')->nullable();
            $table->string('telef1', 20);
            $table->string('telef2', 20)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('telegram', 20)->nullable();
            $table->string('correo', 40)->nullable();
            $table->enum('status',[0,1,2])->default(1)->comment('0:Eliminado,  1:Activo  , 2:Inactivo');
            $table->boolean('envio_telegram')->nullable();
            $table->boolean('envio_whatsapp')->nullable();
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
        Schema::dropIfExists('Clientes');
    }
};
