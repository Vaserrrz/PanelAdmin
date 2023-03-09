<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Builder\Function_;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Satelites', function(Blueprint $table){
            $table->id('id')->bigint(10)->autoIncrement();
            $table->string('SAT_NOMBRE', 50);
            $table->string('SAT_DESCRIPCION', 100);
            $table->string('SAT_AZNUT', 50);
            $table->string('SAT_ELEVACION', 50);
            $table->string('SAT_LNB', 50);
            $table->string('SAT_FRECUENCIA', 50);
            $table->string('SAT_BANDAS', 50);
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
        Schema::dropIfExists('Satelites');
    }
};
