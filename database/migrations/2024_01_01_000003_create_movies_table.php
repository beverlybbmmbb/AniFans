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
            $table->text('synopsis');
            $table->string('poster');
            $table->string('banner')->nullable();
            $table->year('release_year');
            $table->integer('duration')->nullable();
            $table->decimal('rating', 3, 1)->default(0);
            $table->string('studio')->nullable();
            $table->foreignId('country_id')->constrained()->cascadeOnDelete();
            $table->string('genre')->nullable();
            $table->string('slug')->unique();
            $table->integer('review_count')->default(0);
            $table->integer('favorite_count')->default(0);
            $table->timestamps();
            $table->index('title');
            $table->index('release_year');
            $table->index('country_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
