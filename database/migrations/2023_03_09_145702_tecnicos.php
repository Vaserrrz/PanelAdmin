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
        Schema::create('tecnicos', function(Blueprint $table){
            $table->id('id');
            $table->string('tecnico_nombre', 60);
            $table->string('tecnico_correo', 100);
            $table->string('tecnico_telef1', 20);
            $table->string('tecnico_telef2', 20);
            $table->string('tecnico_zona_trabajo', 50);
            $table->string('INCIDENCIA', 200);
            $table->string('REEMPLAZO', 100);
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
        Schema::dropIfExists('Tecnicos');
    }
};
