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
            $table->id('id')->autoIncrement();
            $table->string('SOCIO_NOMBRE', 60);
            $table->string('CI_SOCIO', 10);
            $table->string('TELF_SOCIO', 20);
            $table->string('SOCIO_CORREO', 150)->unique();
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
        Schema::dropIfExists('Socios');
    }
};
