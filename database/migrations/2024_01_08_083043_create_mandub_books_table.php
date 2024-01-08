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
        Schema::create('mandub_books', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mandub_quantity')->nullable();
            $table->bigInteger('minimum')->nullable();
            $table->foreignId('book_id')->constrained('books');
            $table->foreignId('mandub_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mandub_books');
    }
};
