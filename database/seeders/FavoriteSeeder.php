<?php

namespace Database\Seeders;

use App\Models\Favorite;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    public function run(): void
    {
        $movies = Movie::limit(8)->get();
        $users = User::where('role', 'user')->get();

        foreach ($users as $user) {
            $randomMovies = $movies->random(rand(2, 5));
            foreach ($randomMovies as $movie) {
                Favorite::firstOrCreate(
                    [
                        'user_id' => $user->id,
                        'movie_id' => $movie->id,
                    ]
                );
            }
        }
    }
}
