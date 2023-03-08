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
        Schema::create('Socio', function(Blueprint $table){
            $table->id('SOCIO_ID')->autoIncrement();
            $table->integer('CI_SOCIO');
            $table->integer('TELF_SOCIO');
            $table->string('EMAIL_SOCIO', 150)->unique();
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
        Schema::dropIfExists('Socio');
    }
};
