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
                'question' => 'En El Viaje de Chihiro, ¿cómo se llama Chihiro en la casa de baños?',
                'option_a' => 'Yuki',
                'option_b' => 'Sen',
                'option_c' => 'Hana',
                'option_d' => 'Mika',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],

            [
                'question' => '¿Qué estudio creó El Viaje de Chihiro?',
                'option_a' => 'Toei Animation',
                'option_b' => 'Studio Ghibli',
                'option_c' => 'Madhouse',
                'option_d' => 'A-1 Pictures',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],

            [
                'question' => '¿Cuál es la película donde dos personas intercambian cuerpos?',
                'option_a' => 'El jardín de las palabras',
                'option_b' => 'El tiempo contigo',
                'option_c' => 'Your Name',
                'option_d' => 'A Silent Voice',
                'correct_answer' => 'c',
                'difficulty' => 'easy',
            ],

            [
                'question' => 'En El Castillo Ambulante, ¿quién es el antagonista principal?',
                'option_a' => 'Howl',
                'option_b' => 'Calcifer',
                'option_c' => 'La Bruja del Páramo',
                'option_d' => 'Cabeza de Nabo',
                'correct_answer' => 'c',
                'difficulty' => 'medium',
            ],

            [
                'question' => '¿En qué año se estrenó Akira?',
                'option_a' => '1985',
                'option_b' => '1987',
                'option_c' => '1988',
                'option_d' => '1990',
                'correct_answer' => 'c',
                'difficulty' => 'medium',
            ],

            [
                'question' => '¿Qué país es conocido como la cuna de Studio Ghibli?',
                'option_a' => 'Corea del Sur',
                'option_b' => 'Japón',
                'option_c' => 'China',
                'option_d' => 'Tailandia',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],

            [
                'question' => 'En Coco, ¿qué instrumento toca Miguel?',
                'option_a' => 'Piano',
                'option_b' => 'Violín',
                'option_c' => 'Guitarra',
                'option_d' => 'Batería',
                'correct_answer' => 'c',
                'difficulty' => 'easy',
            ],

            [
                'question' => '¿Qué estudio creó la película Coco?',
                'option_a' => 'DreamWorks',
                'option_b' => 'Pixar Animation',
                'option_c' => 'Disney Animation',
                'option_d' => 'Sony Pictures',
                'correct_answer' => 'b',
                'difficulty' => 'easy',
            ],

            [
                'question' => 'En Your Name, ¿cómo se llama el cometa?',
                'option_a' => 'Tiamat',
                'option_b' => 'Tenki',
                'option_c' => 'Kimi',
                'option_d' => 'Yori',
                'correct_answer' => 'a',
                'difficulty' => 'hard',
            ],

            [
                'question' => '¿Qué película de Pixar cuenta la historia de las aventuras de la vida?',
                'option_a' => 'Up',
                'option_b' => 'Inside Out',
                'option_c' => 'Toy Story',
                'option_d' => 'Monsters Inc',
                'correct_answer' => 'a',
                'difficulty' => 'medium',
            ],

            [
                'question' => '¿Cómo se llama el niño en El Niño y la Garza?',
                'option_a' => 'Toto',
                'option_b' => 'Mahito',
                'option_c' => 'Kentaro',
                'option_d' => 'Saburo',
                'correct_answer' => 'b',
                'difficulty' => 'hard',
            ],

            [
                'question' => '¿Qué película trata sobre un guerrero que busca al último dragón?',
                'option_a' => 'Moana',
                'option_b' => 'Encanto',
                'option_c' => 'Raya y el Último Dragón',
                'option_d' => 'Frozen',
                'correct_answer' => 'c',
                'difficulty' => 'medium',
            ],

            [
                'question' => 'En El Viaje de Chihiro, ¿en qué se transforma Haku realmente?',
                'option_a' => 'Un lobo',
                'option_b' => 'Un dragón',
                'option_c' => 'Un fénix',
                'option_d' => 'Un zorro',
                'correct_answer' => 'b',
                'difficulty' => 'hard',
            ],

            [
                'question' => '¿Qué estudio creó la película Shaun el Cordero?',
                'option_a' => 'Aardman Animations',
                'option_b' => 'Studio Ghibli',
                'option_c' => 'Laika',
                'option_d' => 'Cartoon Saloon',
                'correct_answer' => 'a',
                'difficulty' => 'medium',
            ],

            [
                'question' => '¿Qué explora principalmente Zootopia?',
                'option_a' => 'Viajes en el tiempo',
                'option_b' => 'Prejuicio y diversidad',
                'option_c' => 'Exploración espacial',
                'option_d' => 'Historia antigua',
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