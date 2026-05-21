<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trivia_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('score');
            $table->integer('correct_answers');
            $table->integer('total_questions');
            $table->decimal('percentage', 5, 2);
            $table->timestamps();
            $table->index('user_id');
            $table->index('score');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trivia_results');
    }
};
