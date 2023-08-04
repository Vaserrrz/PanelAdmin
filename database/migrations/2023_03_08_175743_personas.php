<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function(Blueprint $table){

            $table->engine = 'InnoDB';
            $table->id('id')->autoIncrement();
            $table->string('nombre', 100);
            $table->integer('cedula')->default(10)->unique();
            $table->string('direccion', 100)->nullable();
            $table->string('telef1', 12);
            $table->string('telef2', 12)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('telegram', 20)->nullable();
            $table->string('correo', 50)->nullable();
            $table->enum('tipo',['Socio','Técnico','Revendedor'])->default('Socio')->comment('Socio, Técnico, Revendedor');     //Tipo de Persona
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
