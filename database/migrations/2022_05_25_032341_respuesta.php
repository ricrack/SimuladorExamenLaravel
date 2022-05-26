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

        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();

            $table->string('userAlumno');
            $table->string('userMaestro');

            $table->string('materia');
            $table->string('respuesta1');

            $table->string('respuesta2');
            $table->string('respuesta3');

            $table->string('respuesta4');
            $table->string('respuesta5');

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
        Schema::dropIfExists('respuestas');
    }
};
