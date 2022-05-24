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
        Schema::create('examen', function (Blueprint $table) {
            $table->id();

            $table->string('maestro');
            $table->string('materia');

            $table->string('pregunta1');
            $table->string('respuesta1');

            $table->string('pregunta2');
            $table->string('respuesta2');

            $table->string('pregunta3');
            $table->string('respuesta3');

            $table->string('pregunta4');
            $table->string('respuesta4');

            $table->string('pregunta5');
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
        Schema::dropIfExists('examen');
    }
};
