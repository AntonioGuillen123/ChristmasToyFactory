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
        Schema::create('toy', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image');
            $table->text('description');
            $table->foreignId('minimum_age_id')->constrained('minimum_age')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toy');
    }
};