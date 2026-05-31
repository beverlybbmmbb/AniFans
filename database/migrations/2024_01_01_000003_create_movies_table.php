<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {

          $table->id();

$table->string('title');
$table->string('slug')->unique();

$table->text('synopsis');

$table->string('poster_path')->nullable();
$table->string('backdrop_path')->nullable();

$table->year('release_year');

$table->integer('duration')->nullable();

$table->decimal('rating', 3, 1)->default(0);

$table->string('studio')->nullable();

$table->string('genre')->nullable();

$table->foreignId('country_id')
    ->constrained()
    ->cascadeOnDelete();

$table->integer('review_count')->default(0);
$table->integer('favorite_count')->default(0);

$table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};