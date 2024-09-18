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
        Schema::rename('authours_books', 'book_author');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('book_author', 'authours_books');
    }
};
