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
        Schema::create('regnotas', function (Blueprint $table) {
            $table->string('estudiante', 4);
            $table->string('materia', 2);
            $table->string('profesor', 2);
            $table->float('parcial1', 1, 1);
            $table->float('parcial2', 1, 1);
            $table->float('efinal', 1, 1);
            $table->float('nfinal', 1, 1);
            $table->char('estado', 1);

            $table->timestamps();
            $table->foreign('estudiante')->references('codestudiante')->on('estudiantes');
            $table->foreign('materia')->references('codmateria')->on('materias');
            $table->foreign('profesor')->references('codprofesor')->on('profesores');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regnotas');
    }
};
