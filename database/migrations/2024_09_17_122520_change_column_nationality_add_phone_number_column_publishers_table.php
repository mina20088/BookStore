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
        Schema::table('publishers', function (Blueprint $table) {
            $table->tinyInteger('nationality')->nullable()->change();
            $table->string('phone_number')->nullable()->unique('UQ_PHONE_NUMBER')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('publishers', function (Blueprint $table) {
            $table->string('nationality')->nullable()->change();
            $table->dropColumn('phone_number');
        });
    }
};
