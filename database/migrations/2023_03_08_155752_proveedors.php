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
        Schema::create('proveedors', function(Blueprint $table){
            $table->id('id')->autoIncrement();
            $table->integer('ci_rif');
            $table->string('razon', 150);
            $table->string('direccion', 100);
            $table->string('contacto', 50);
            $table->string('metodo_pago', 50);
            $table->string('detalle_pago', 50);
            $table->string('correo', 50)->unique();
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
        Schema::dropIfExists('proveedors');
    }
};
