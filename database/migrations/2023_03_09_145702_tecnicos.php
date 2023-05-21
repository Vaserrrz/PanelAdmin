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
            $table->id('id');
            $table->string('nombre', 60);
            $table->string('correo', 100);
            $table->string('telef1', 20);
            $table->string('telef2', 20);
            $table->string('zona_trabajo', 50);
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
