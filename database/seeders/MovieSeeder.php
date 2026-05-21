<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'title' => 'Spirited Away',
            'description' => 'Studio Ghibli masterpiece',
            'year' => 2001,
            'duration' => 125,
            'studio' => 'Ghibli',
            'country_id' => 1,
            'rating' => 9.5,
            'poster' => 'spirited.jpg'
        ]);
    }
}