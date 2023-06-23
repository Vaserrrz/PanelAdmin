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
<<<<<<< HEAD
            $table->integer('CI_RIF')->default(20);
            $table->string('CLIENTE_RAZON', 100);
            $table->string('CLIENTE_TELF', 20);
            $table->string('CLIENTE_DIRECCION', 100)->nullable();
            $table->string('CLIENTE_DETALLE')->nullable();
            $table->string('CLIENTE_TELF2', 20)->nullable();
            $table->string('CLIENTE_WHATSAPP', 20)->nullable();
            $table->string('CLIENTE_TELEGRAM', 20)->nullable();
            $table->string('CLIENTE_CORREO', 40)->nullable();
            $table->boolean('STATUS')->nullable();
            $table->boolean('ENVIO_TELEGRAM')->nullable();
            $table->boolean('ENVIO_WHATSAPP')->nullable();

=======
            $table->integer('ci_rif')->default(20);
            $table->string('cliente_razon', 100);
            $table->string('cliente_direccion', 100);
            $table->string('cliente_telef1', 12);
            $table->string('cliente_telef2', 12)->nullable();
            $table->string('cliente_whatsapp', 20)->nullable();
            $table->string('cliente_telegram', 20)->nullable();
            $table->string('cliente_correo', 40)->nullable();
            $table->longText('observacion')->nullable();
            $table->enum('status',[0,1,2])->default(1)->comment('0:Eliminado,  1:Activo  , 2:Inactivo');
            $table->boolean('envio_telegram')->nullable();
            $table->boolean('envio_whatsapp')->nullable();
>>>>>>> 37eee98b9ada02a5e005d001ade9b4c7b2ec8e95
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
