<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('codestudiante', 4);
            $table->string('nomestudiante', 100);
            $table->integer('edaestudiante');
            $table->date('fechaestudiante');
            $table->char('sexestudiante', 1);
            $table->string('ciudad', 5);
            $table->string('barrio', 3);
            $table->string('programa', 2);

            $table->timestamps();
            $table->primary('codestudiante');
            $table->foreign('ciudad')->references('codciudad')->on('ciudades');
            $table->foreign('barrio')->references('codbarrio')->on('barrios');
            $table->foreign('programa')->references('codprograma')->on('programas');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
