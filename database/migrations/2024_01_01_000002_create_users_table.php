<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
$table->string('username')->unique();
$table->string('email')->unique();
$table->timestamp('email_verified_at')->nullable();
$table->string('password');
$table->string('avatar')->default('https://ui-avatars.com/api/?name=User');
$table->text('bio')->nullable();
$table->enum('role', ['user', 'admin'])->default('user');

$table->integer('age')->nullable();
$table->string('gender')->nullable();
$table->integer('xp')->default(0);
$table->integer('level')->default(1);
$table->integer('streak')->default(0);
$table->timestamp('last_played_at')->nullable();
$table->rememberToken();
$table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
