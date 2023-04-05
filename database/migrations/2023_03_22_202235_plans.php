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
            $table->id('id')->bigint()->autoIncrement();
            $table->string('PLAN_NOMBRE');
            $table->string('PLAN_SUBIDA');
            $table->string('PLAN_BAJADA');
            $table->string('PLAN_CONTENCION');
            $table->integer('PLAN_COSTO');
            $table->integer('PLAN_PRECIO');
            $table->timestamps();

            $table->unsignedBigInteger('RESELLER_ID');
            $table->foreign('RESELLER_ID')
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
