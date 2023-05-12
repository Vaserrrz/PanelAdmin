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
        Schema::create('satelites', function(Blueprint $table){
            $table->id('id');

            //CAMPOS VALIDADOS
            $table->string('SAT_NOMBRE', 50);
            $table->string('SAT_BANDAS', 50);
            $table->timestamps();
            $table->unsignedBigInteger('PROVEEDOR_ID');
            $table->foreign('PROVEEDOR_ID')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //CAMPOS NO VALIDADOS
            $table->string('SAT_DESCRIPCION', 100)->nullable();
            $table->string('SAT_AZNUT', 50)->nullable();
            $table->string('SAT_ELEVACION', 50)->nullable();
            $table->string('SAT_LNB', 50)->nullable();
            $table->string('SAT_FRECUENCIA', 50)->nullable();
            $table->unsignedBigInteger('RESELLER_ID')->nullable();
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
        Schema::dropIfExists('satelites');
    }
};
