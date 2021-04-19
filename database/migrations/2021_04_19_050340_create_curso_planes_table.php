<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoPlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_planes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('plan_estudio_id');
            $table->unsignedBigInteger('ciclo_id');

            $table->foreign('curso_id')->references('id')->on('cursos')->onUpdate('cascade');
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
        Schema::dropIfExists('curso_planes');
    }
}
