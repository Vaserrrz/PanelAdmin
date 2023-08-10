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
            $table->string('plan_NOMBRE');
            $table->string('plan_SUBIDA');
            $table->string('plan_BAJADA');
            $table->string('plan_CONTENCION');
            $table->integer('plan_COSTO');
            $table->integer('plan_PRECIO');
            $table->timestamps();

            $table->unsignedBigInteger('SATELITE_ID');
            $table->foreign('SATELITE_ID')
                ->references('id')
                ->on('satelites')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('RESELLER_ID');
            $table->foreign('RESELLER_ID')
                ->references('id')
                ->on('revendedors')
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
