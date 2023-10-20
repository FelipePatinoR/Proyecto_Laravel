<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facultades', function (Blueprint $table) {
            $table->string('codfacultad', 2);
            $table->string('nomfacultad', 100);
            $table->timestamps();
            $table->primary('codfacultad', 2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facultades');
    }
};
