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
            $table->string('encargado_nombre');
            $table->string('encargado_telf', 20);
            $table->string('encargado_correo', 100)->unique();
            $table->boolean('envio_telegram')->nullable();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
<<<<<<< HEAD
            $table->string('ENCARGADO_NOMBRE');
            $table->string('ENCARGADO_TELF', 20);

            $table->string('ENCARGADO_CORREO', 100)->unique();
            $table->string('ENVIO_TELEGRAM')->nullable();
=======
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
        Schema::dropIfExists('Encargados');
    }
};
