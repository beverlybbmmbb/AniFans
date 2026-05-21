<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            UserSeeder::class,
            MovieSeeder::class,
            CharacterSeeder::class,
            TriviaSeeder::class,
            ReviewSeeder::class,
            FavoriteSeeder::class,
            TriviaResultSeeder::class,
        ]);
    }
}