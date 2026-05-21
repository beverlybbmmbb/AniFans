<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $movies = Movie::limit(5)->get();
        $users = User::where('role', 'user')->get();

        $reviewTexts = [
            'An absolute masterpiece that captures the essence of cinema. Visually stunning and emotionally profound.',
            'Simply magical. Every frame is a work of art that will stay with you long after the credits roll.',
            'A breathtaking journey that combines beauty, emotion, and storytelling at its finest.',
            'One of the greatest animated films ever created. A must-watch for all cinema lovers.',
            'Utterly captivating from beginning to end. The animation is breathtaking.',
            'A cinematic experience that transcends the medium. Pure storytelling excellence.',
            'Emotionally powerful and visually exquisite. A true work of art.',
            'Stunning animation combined with a deeply moving narrative. Absolutely incredible.',
        ];

        $scores = [8.0, 8.5, 9.0, 9.5, 8.2, 8.8, 9.3, 7.8];

        foreach ($movies as $movie) {
            foreach ($users as $user) {
                Review::firstOrCreate(
                    [
                        'movie_id' => $movie->id,
                        'user_id' => $user->id,
                    ],
                    [
                        'review' => $reviewTexts[array_rand($reviewTexts)],
                        'score' => $scores[array_rand($scores)],
                    ]
                );
            }
        }
    }
}
