<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->integer('dia');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->enum('estado',[1,2])->default(1);

            $table->unsignedBigInteger('curso_grupo_id');
            /* $table->foreign('curso_grupo_id')->references('id')->on('curso_grupos')->onUpdate('cascade'); */
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
        Schema::dropIfExists('horarios');
    }
}
