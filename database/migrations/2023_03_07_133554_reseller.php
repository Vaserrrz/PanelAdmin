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
        Schema::create('reseller', function(Blueprint $table){
            $table->id('RESELLER_ID');
            $table->string('NOMBRE_RESELLER');
            $table->string('NOC_RESELLER');
            $table->integer('TELF_RESELLER');
            $table->integer('TELF2_RESELLER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller');
    }
};
