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
        Schema::create('plans', function(Blueprint $table){
            $table->id('id');
            $table->string('plan_nombre');
            $table->string('plan_tasa_subida');
            $table->string('plan_tasa_bajada');
            $table->string('plan_contencion');
            $table->integer('plan_costo');
            $table->integer('plan_precio');
            $table->timestamps();

            $table->unsignedBigInteger('satelite_ide');
            $table->foreign('satelite_id')
                ->references('id')
                ->on('satelites')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('reseller_id');
            $table->foreign('reseller_id')
                ->references('id')
                ->on('revendedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('PROVEEDOR_ID');
            $table->foreign('PROVEEDOR_ID')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
};
