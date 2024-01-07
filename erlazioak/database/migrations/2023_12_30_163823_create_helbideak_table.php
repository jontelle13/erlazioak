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
    Schema::create('helbideak', function (Blueprint $table) {
        $table->id();
        $table->foreignId('erabiltzailea_id')->constrained('erabiltzaileak');
        $table->string('helbidea');
        $table->timestamps();

        $table->unique('erabiltzailea_id');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('helbideak');
    }
};

