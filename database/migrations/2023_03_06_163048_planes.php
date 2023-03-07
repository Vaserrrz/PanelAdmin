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
        Schema::create('planes', function(Blueprint $table){
            $table->id('PLAN_ID')->bigint()->autoIncrement();
            $table->string('PLAN_NOMBRE', 100);
            $table->string('PLAN_SUBIDA');
            $table->string('PLAN_BAJADA');
            $table->string('PLAN_CONTENCION');
            $table->integer('PLAN_COSTO');
            $table->integer('PLAN_PRECIO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes');
    }
};
