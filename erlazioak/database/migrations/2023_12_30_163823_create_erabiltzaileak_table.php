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
        Schema::create('erabiltzaileak', function (Blueprint $table) {
            $table->id();
            $table->string('izena');
            $table->string('abizena');
            $table->string('adina');
            $table->string('email')->unique();
            $table->date('jaiotze_data');
            $table->enum('generoa', ['maskulinoa', 'femeninoa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('erabiltzaileak');
    }
};



