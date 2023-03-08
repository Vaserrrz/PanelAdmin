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
            $table->string('TELF_RESELLER', 20);
            $table->string('TELF2_RESELLER', 20);
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
        Schema::dropIfExists('reseller');
    }
};
