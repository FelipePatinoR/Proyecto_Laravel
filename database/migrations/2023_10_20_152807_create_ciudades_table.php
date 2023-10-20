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
        Schema::create('ciudades', function (Blueprint $table) {
            $table->string('codciudad', 2);
            $table->string('nomciudad', 100);
            $table->string('departamento', 2);
            $table->timestamps();
            $table->primary('codciudad');
            $table->foreign('departamento')->references('coddepto')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades');
    }
};
