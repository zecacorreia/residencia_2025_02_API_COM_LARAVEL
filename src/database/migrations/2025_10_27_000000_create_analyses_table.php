<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('analyses', function (Blueprint $table) {
            $table->id();
            $table->string('ticker', 16);
            $table->decimal('price', 18, 6)->nullable();
            $table->decimal('avg_50', 18, 6)->nullable();
            $table->decimal('avg_200', 18, 6)->nullable();
            $table->decimal('sentiment_score', 5, 2)->nullable(); // -1.00 a +1.00
            $table->string('currency', 8)->nullable();

            $table->text('title')->nullable();
            $table->longText('content')->nullable(); // texto jornalístico da Key

            $table->json('sources')->nullable();     // JSON: dados da Júlia/Pedro + timestamps
            $table->enum('status', ['draft','approved','published'])->default('draft');

            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('analyses');
    }
};
