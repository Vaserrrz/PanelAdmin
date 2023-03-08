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
            $table->integer('CI_RIF');
            $table->string('RAZON', 150);
            $table->string('DIRECCION', 100);
            $table->string('CONTACTO', 50);
            $table->string('METODO_PAGO', 50);
            $table->string('DETALLE_PAGO', 50);
            $table->string('PROVEEDOR_CORREO', 50)->unique();
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
        Schema::dropIfExists('proveedors');
    }
};
