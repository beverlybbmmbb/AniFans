<?php

namespace Database\Seeders;

use App\Models\TriviaQuestion;
use Illuminate\Database\Seeder;

class TriviaSeeder extends Seeder
{
    public function run(): void
    {
        $questions = [
            [
                'question' => 'In Spirited Away, what is Chihiro\'s new name in the bathhouse?',
                'option_a' => 'Yuki',
                'option_b' => 'Sen',
                'option_c' => 'Hana',
                'option_d' => 'Mika',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],
            [
                'question' => 'Which studio created Spirited Away?',
                'option_a' => 'Toei Animation',
                'option_b' => 'Studio Ghibli',
                'option_c' => 'Madhouse',
                'option_d' => 'A-1 Pictures',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],
            [
                'question' => 'What is the title of the film where two people swap bodies?',
                'option_a' => 'Garden of Words',
                'option_b' => 'Weathering With You',
                'option_c' => 'Your Name',
                'option_d' => 'A Silent Voice',
                'correct_answer' => 'c',
                'difficulty' => 'easy',
            ],
            [
                'question' => 'In Howl\'s Moving Castle, who is the main antagonist?',
                'option_a' => 'Howl',
                'option_b' => 'Calcifer',
                'option_c' => 'Witch of the Waste',
                'option_d' => 'Turnip Head',
                'correct_answer' => 'c',
                'difficulty' => 'medium',
            ],
            [
                'question' => 'What year was Akira released?',
                'option_a' => '1985',
                'option_b' => '1987',
                'option_c' => '1988',
                'option_d' => '1990',
                'correct_answer' => 'c',
                'difficulty' => 'medium',
            ],
            [
                'question' => 'Which country is known as the home of Studio Ghibli?',
                'option_a' => 'South Korea',
                'option_b' => 'Japan',
                'option_c' => 'China',
                'option_d' => 'Thailand',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],
            [
                'question' => 'In Coco, what instrument does Miguel play?',
                'option_a' => 'Piano',
                'option_b' => 'Violin',
                'option_c' => 'Guitar',
                'option_d' => 'Drums',
                'correct_answer' => 'c',
                'difficulty' => 'easy',
            ],
            [
                'question' => 'What studio created Coco?',
                'option_a' => 'DreamWorks',
                'option_b' => 'Pixar Animation',
                'option_c' => 'Disney Animation',
                'option_d' => 'Sony Pictures',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],
            [
                'question' => 'In Your Name, what is the name of the comet?',
                'option_a' => 'Tiamat',
                'option_b' => 'Tenki',
                'option_c' => 'Kimi',
                'option_d' => 'Yori',
                'correct_answer' => 'a',
                'difficulty' => 'hard',
            ],
            [
                'question' => 'Which Pixar film tells the story of life\'s adventures?',
                'option_a' => 'Up',
                'option_b' => 'Inside Out',
                'option_c' => 'Toy Story',
                'option_d' => 'Monsters Inc',
                'correct_answer' => 'a',
                'difficulty' => 'medium',
            ],
            [
                'question' => 'What is the name of the boy in The Boy and The Heron?',
                'option_a' => 'Toto',
                'option_b' => 'Mahito',
                'option_c' => 'Kentaro',
                'option_d' => 'Saburo',
                'correct_answer' => 'b',
                'difficulty' => 'hard',
            ],
            [
                'question' => 'Which film features a warrior searching for the last dragon?',
                'option_a' => 'Moana',
                'option_b' => 'Encanto',
                'option_c' => 'Raya and The Last Dragon',
                'option_d' => 'Frozen',
                'correct_answer' => 'c',
                'difficulty' => 'medium',
            ],
            [
                'question' => 'In Spirited Away, what does Haku\'s true form resemble?',
                'option_a' => 'A wolf',
                'option_b' => 'A dragon',
                'option_c' => 'A phoenix',
                'option_d' => 'A fox',
                'correct_answer' => 'b',
                'difficulty' => 'hard',
            ],
            [
                'question' => 'Which studio created Shaun the Sheep Movie?',
                'option_a' => 'Aardman Animations',
                'option_b' => 'Studio Ghibli',
                'option_c' => 'Laika',
                'option_d' => 'Cartoon Saloon',
                'correct_answer' => 'a',
                'difficulty' => 'medium',
            ],
            [
                'question' => 'What does Zootopia primarily explore?',
                'option_a' => 'Time travel',
                'option_b' => 'Prejudice and diversity',
                'option_c' => 'Space exploration',
                'option_d' => 'Ancient history',
                'correct_answer' => 'b',
                'difficulty' => 'medium',
            ],
        ];

        foreach ($questions as $question) {
            TriviaQuestion::firstOrCreate(
                ['question' => $question['question']],
                $question
            );
        }
    }
}
