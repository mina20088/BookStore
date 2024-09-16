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
        Schema::create('authours_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('athours',indexName:"FK_AUTHORS_BOOK_AUTHOR" )->cascadeOnDelete();
            $table->foreignId('book_id')->constrained('books',indexName:"FK_AUTHORS_BOOK_BOOK" )->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authours_books');
    }
};
