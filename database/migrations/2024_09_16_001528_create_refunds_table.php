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
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->unique()->constrained(indexName: "FK_PAYMENTS_REFUNDS")->cascadeOnDelete();
            $table->timestamp("refund_date");
            $table->string('refund_reason',30);
            $table->decimal('refund_amount',10,2);
            $table->tinyInteger('refund_status');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};
