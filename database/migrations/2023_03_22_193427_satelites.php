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
            $table->string('sat_nombre', 50);
            $table->string('sat_descripcion', 100);
            $table->string('sat_aznut', 50);
            $table->string('sat_elevacion', 50);
            $table->string('sat_lnb', 50);
            $table->string('sat_frecuencia', 50);
            $table->string('sat_bandas', 50);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('reseller_id');
            $table->foreign('reseller_id')
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
