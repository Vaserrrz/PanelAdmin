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
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')
                ->references('id')
                ->on('personas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('zona_trabajo', 50);
            $table->string('incidencia', 200);
            $table->string('reemplazo', 100);
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