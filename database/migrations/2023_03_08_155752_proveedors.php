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
            $table->string('prov_razon', 150);
            $table->string('prov_direccion', 100);
            $table->string('prov_contacto', 50);
            $table->string('prov_metodo_pago', 50);
            $table->string('prov_detalle_pago', 50);
            $table->string('prov_correo', 50)->unique();
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
