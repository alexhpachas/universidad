<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoGrupoCursoPlaneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_grupo_curso_plane', function (Blueprint $table) {
            /* $table->id(); */

            $table->unsignedBigInteger('curso_grupo_id');
            $table->unsignedBigInteger('curso_plane_id');

            $table->foreign('curso_grupo_id')->references('id')->on('curso_grupos')->onUpdate('cascade');
            $table->foreign('curso_plane_id')->references('id')->on('curso_planes')->onUpdate('cascade');            
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
        Schema::dropIfExists('curso_grupo_curso_plane');
    }
}
