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
        Schema::create('post_gaia', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('gaia_id')->constrained('gaiak');
            $table->primary(['post_id', 'gaia_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
