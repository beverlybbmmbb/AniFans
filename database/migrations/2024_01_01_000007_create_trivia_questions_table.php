<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('trivia_questions', function (Blueprint $table) {
        $table->id();
        $table->string('question');

        $table->string('option_a');
        $table->string('option_b');
        $table->string('option_c');
        $table->string('option_d');

        $table->string('correct_answer'); // a,b,c,d

        $table->string('difficulty')->default('easy');

        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('trivia_questions');
}
};