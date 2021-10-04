<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoPlanePeriodoGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_plane_periodo_grupo', function (Blueprint $table) {
            $table->id();
            
                /* $table->unsignedBigInteger('curso_plane_id'); */
                $table->unsignedBigInteger('grupo_id');
                /* $table->unsignedBigInteger('periodo_id'); */
                $table->unsignedBigInteger('curso_plane_periodo_id');
                /* $table->unsignedBigInteger('user_id'); */
                
    
                /* $table->foreign('curso_plane_id')->references('id')->on('curso_planes')->onUpdate('cascade'); */
                $table->foreign('grupo_id')->references('id')->on('grupos')->onUpdate('cascade');
                /* $table->foreign('periodo_id')->references('id')->on('periodos')->onUpdate('cascade'); */
                $table->foreign('curso_plane_periodo_id')->references('id')->on('curso_plane_periodos')->onDelete('cascade');
                /* $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');    */
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
        Schema::dropIfExists('curso_plane_periodo_grupos');
    }
}
