<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    public function run(): void
    {
        $characters = [
            [
                'movie_slug' => 'spirited-away',
                'characters' => [
                    [
                        'name' => 'Chihiro Ogino',
                        'image' => 'https://ui-avatars.com/api/?name=Chihiro&background=c24e30&color=fdfaf4&size=200',
                        'description' => 'A brave young girl who discovers her true strength within the magical bathhouse.',
                    ],
                    [
                        'name' => 'Haku',
                        'image' => 'https://ui-avatars.com/api/?name=Haku&background=2e6b2e&color=fdfaf4&size=200',
                        'description' => 'A mysterious and protective spirit who guides Chihiro through her journey.',
                    ],
                    [
                        'name' => 'Yubaba',
                        'image' => 'https://ui-avatars.com/api/?name=Yubaba&background=d4a373&color=2d1f0e&size=200',
                        'description' => 'The powerful witch who controls the bathhouse and its mysteries.',
                    ],
                ],
            ],
            [
                'movie_slug' => 'your-name',
                'characters' => [
                    [
                        'name' => 'Mitsuha Miyamizu',
                        'image' => 'https://ui-avatars.com/api/?name=Mitsuha&background=c24e30&color=fdfaf4&size=200',
                        'description' => 'A young woman from a rural town who mysteriously swaps bodies with Taki.',
                    ],
                    [
                        'name' => 'Taki Tachibana',
                        'image' => 'https://ui-avatars.com/api/?name=Taki&background=f0e6cc&color=2d1f0e&size=200',
                        'description' => 'A Tokyo high school student whose life changes when he swaps bodies with Mitsuha.',
                    ],
                ],
            ],
            [
                'movie_slug' => 'howls-moving-castle',
                'characters' => [
                    [
                        'name' => 'Sophie Hatter',
                        'image' => 'https://ui-avatars.com/api/?name=Sophie&background=d4a373&color=2d1f0e&size=200',
                        'description' => 'A young woman cursed to age rapidly who becomes Howl\'s devoted companion.',
                    ],
                    [
                        'name' => 'Howl Jenkins',
                        'image' => 'https://ui-avatars.com/api/?name=Howl&background=2e6b2e&color=fdfaf4&size=200',
                        'description' => 'A charming wizard with a hidden depth and unwavering loyalty.',
                    ],
                ],
            ],
            [
                'movie_slug' => 'coco',
                'characters' => [
                    [
                        'name' => 'Miguel Rivera',
                        'image' => 'https://ui-avatars.com/api/?name=Miguel&background=c24e30&color=fdfaf4&size=200',
                        'description' => 'A young aspiring musician who enters the Land of the Dead.',
                    ],
                    [
                        'name' => 'Ernesto de la Cruz',
                        'image' => 'https://ui-avatars.com/api/?name=Ernesto&background=f0e6cc&color=2d1f0e&size=200',
                        'description' => 'A legendary musician with secrets hidden in the Land of the Dead.',
                    ],
                ],
            ],
            [
                'movie_slug' => 'akira',
                'characters' => [
                    [
                        'name' => 'Kaneda',
                        'image' => 'https://ui-avatars.com/api/?name=Kaneda&background=c24e30&color=fdfaf4&size=200',
                        'description' => 'A biker gang leader with unwavering determination and loyalty.',
                    ],
                    [
                        'name' => 'Akira',
                        'image' => 'https://ui-avatars.com/api/?name=Akira&background=2e6b2e&color=fdfaf4&size=200',
                        'description' => 'A powerful psychic entity at the center of the conflict.',
                    ],
                ],
            ],
        ];

        foreach ($characters as $movieData) {
            $movie = Movie::where('slug', $movieData['movie_slug'])->first();
            if ($movie) {
                foreach ($movieData['characters'] as $char) {
                    Character::firstOrCreate(
                        [
                            'movie_id' => $movie->id,
                            'name' => $char['name'],
                        ],
                        $char
                    );
                }
            }
        }
    }
}
