<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->id();
            $table->string('tarefa');
            $table->boolean('status');
            $table->date('dia')->default(date('Y-m-d'));
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('listas');
    }
};
