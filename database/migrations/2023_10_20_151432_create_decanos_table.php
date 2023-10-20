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
        Schema::create('decanos', function (Blueprint $table) {
            $table->string('coddecano', 2);
            $table->string('nomdecano', 100);
            $table->string('facultad', 2);
            $table->timestamps();
            $table->primary('coddecano');
            $table->foreign('facultad')->references('codfacultad')->on('facultades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decanos');
    }
};
