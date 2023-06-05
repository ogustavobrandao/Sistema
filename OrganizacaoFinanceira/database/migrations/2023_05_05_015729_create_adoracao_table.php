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
        Schema::create('adoracao', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('dizimo');
            $table->float('oferta');
            $table->float('total');
            $table->float('outros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoracao');
    }
};
