<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre')->unique();
            $table->integer('horas_teoricas'); 
            $table->integer('horas_practicas');
            $table->integer('creditos');
            $table->string('tipo');

            $table->unsignedBigInteger('programa_id');
            $table->unsignedBigInteger('plan_estudio_id');
            $table->unsignedBigInteger('ciclo_id');

            $table->foreign('programa_id')->references('id')->on('programas')->onUpdate('cascade');
            $table->foreign('plan_estudio_id')->references('id')->on('plan_estudios')->onUpdate('cascade');
            $table->foreign('ciclo_id')->references('id')->on('ciclos')->onUpdate('cascade');
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
        Schema::dropIfExists('cursos');
    }
}
