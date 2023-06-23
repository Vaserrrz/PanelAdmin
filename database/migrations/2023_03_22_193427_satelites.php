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
<<<<<<< HEAD

            //CAMPOS VALIDADOS
            $table->string('SAT_NOMBRE', 50);
            $table->string('SAT_BANDAS', 50);
=======
            $table->string('sat_nombre', 50);
            $table->string('sat_descripcion', 100);
            $table->string('sat_aznut', 50);
            $table->string('sat_elevacion', 50);
            $table->string('sat_lnb', 50);
            $table->string('sat_frecuencia', 50);
            $table->string('sat_bandas', 50);
>>>>>>> 37eee98b9ada02a5e005d001ade9b4c7b2ec8e95
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id')
                ->references('id')
                ->on('proveedors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

<<<<<<< HEAD
            //CAMPOS NO VALIDADOS
            $table->string('SAT_DESCRIPCION', 100)->nullable();
            $table->string('SAT_AZNUT', 50)->nullable();
            $table->string('SAT_ELEVACION', 50)->nullable();
            $table->string('SAT_LNB', 50)->nullable();
            $table->string('SAT_FRECUENCIA', 50)->nullable();
            $table->unsignedBigInteger('RESELLER_ID')->nullable();
            $table->foreign('RESELLER_ID')
=======
            $table->unsignedBigInteger('reseller_id');
            $table->foreign('reseller_id')
>>>>>>> 37eee98b9ada02a5e005d001ade9b4c7b2ec8e95
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
