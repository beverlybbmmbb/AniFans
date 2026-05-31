<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Movie;
use App\Models\Favorite;

class FavoriteSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $movies = Movie::all();

        foreach ($users as $user) {

            // evita pedir más películas de las que existen
            $randomMovies = $movies->random(
                min(3, $movies->count())
            );

            foreach ($randomMovies as $movie) {

                Favorite::create([
                    'user_id' => $user->id,
                    'movie_id' => $movie->id,
                ]);
            }
        }
    }
}