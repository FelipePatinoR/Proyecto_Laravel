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
        Schema::create('programas', function (Blueprint $table) {
            $table->string('codprograma', 2);
            $table->string('nomprograma', 100);
            $table->string('facultad', 2);
            $table->timestamps();
            $table->primary('codprograma');
            $table->foreign('facultad')->references('codfacultad')->on('facultades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
