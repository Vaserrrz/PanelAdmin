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
        Schema::create('Tecnicos', function(Blueprint $table){
            $table->id('id')->autoIncrement();
            $table->string('TECNICO_NOMBRE', 60);
            $table->string('TECNICO_CORREO', 100);
            $table->string('TECNICO_TELF', 20);
            $table->string('TECNICO_TELF2', 20);
            $table->string('ZONA_TRABAJO', 50);
            $table->string('INCIDENCIA', 200);
            $table->string('REEMPLAZO', 100);
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
        Schema::dropIfExists('Tecnicos');
    }
};
