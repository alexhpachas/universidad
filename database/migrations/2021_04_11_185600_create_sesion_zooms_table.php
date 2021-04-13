<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesionZoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesion_zooms', function (Blueprint $table) {
            $table->id();
            $table->string('zoom_id');
            $table->string('zoom_enlace');
            $table->string('zoom_clave');
            $table->integer('moodle_id');

            $table->unsignedBigInteger('zoom_usuario_id');
            $table->unsignedBigInteger('horario_id');

            $table->foreign('zoom_usuario_id')->references('id')->on('zoom_usuarios')->onUpdate('cascade');
            $table->foreign('horario_id')->references('id')->on('horarios')->onUpdate('cascade');
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
        Schema::dropIfExists('sesion_zooms');
    }
}
