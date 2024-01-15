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
        Schema::create('partidasusuarios', function (Blueprint $table) {
            $table->id('id_partidasusuarios');
            $table->unsignedBigInteger('id_partidas');
            $table->foreign('id_partidas')->references('id_partidas')->on('partidas');

            $table->unsignedBigInteger('id_usuarios');
            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios');

            $table->string('gana', 50);
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
        Schema::dropIfExists('partidasusuarios');
    }
};