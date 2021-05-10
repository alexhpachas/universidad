<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoGrupoGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_grupo_grupo', function (Blueprint $table) {
            /* $table->id(); */

            $table->unsignedBigInteger('curso_grupo_id');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('curso_grupo_id')->references('id')->on('curso_grupos')->onUpdate('cascade');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onUpdate('cascade');
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
        Schema::dropIfExists('curso_grupo_grupo');
    }
}
