<?php

namespace Database\Seeders;

use App\Models\TriviaResult;
use App\Models\User;
use Illuminate\Database\Seeder;

class TriviaResultSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::where('role', 'user')->get();

        foreach ($users as $user) {
            for ($i = 0; $i < rand(3, 8); $i++) {
                $totalQuestions = 10;
                $correctAnswers = rand(5, 10);
                $percentage = ($correctAnswers / $totalQuestions) * 100;
                $score = $correctAnswers * 10;

                TriviaResult::create([
                    'user_id' => $user->id,
                    'score' => $score,
                    'correct_answers' => $correctAnswers,
                    'total_questions' => $totalQuestions,
                    'percentage' => $percentage,
                ]);
            }
        }
    }
}
