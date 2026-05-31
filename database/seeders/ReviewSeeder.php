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
        $movies = Movie::inRandomOrder()->get();
        $users = User::where('role', 'user')->get();

        $reviews = [
            'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.',
            'Una propuesta visualmente deslumbrante con una notable carga emocional.',
            'Un viaje narrativo cautivador de principio a fin.',
            'Una de las producciones más destacadas dentro de su género.',
            'Una experiencia fílmica memorable que permanece en la mente del espectador.',
            'Una obra de profunda sensibilidad emocional y refinada animación.',
            'Un ejemplo de excelencia narrativa y construcción cinematográfica.',
            'Una auténtica pieza de arte cinematográfico contemporáneo.',
        ];

        foreach ($movies as $movie) {

            // 👇 cada película tendrá entre 2 y 5 reseñas
            $randomUsers = $users->random(rand(2, 5));

            foreach ($randomUsers as $user) {

                Review::firstOrCreate(
                    [
                        'movie_id' => $movie->id,
                        'user_id' => $user->id,
                    ],
                    [
                        'comment' => $reviews[array_rand($reviews)],
                        'rating' => rand(7, 10),
                    ]
                );
            }
        }
    }
}