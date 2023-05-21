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
            $table->string('sat_NOMBRE', 50);
            $table->string('sat_DESCRIPCION', 100);
            $table->string('sat_AZNUT', 50);
            $table->string('sat_ELEVACION', 50);
            $table->string('sat_LNB', 50);
            $table->string('sat_FRECUENCIA', 50);
            $table->string('sat_BANDAS', 50);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('RESELLER_ID');
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
