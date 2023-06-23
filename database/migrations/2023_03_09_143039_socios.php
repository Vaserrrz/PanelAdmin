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
        Schema::create('Socios', function(Blueprint $table){
            $table->id('id');
            $table->string('socio_nombre', 60);
            $table->string('socio_cedula', 10);
            $table->string('socio_telef', 20);
            $table->string('socio_correo', 150)->unique();
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
        Schema::dropIfExists('Socios');
    }
};
