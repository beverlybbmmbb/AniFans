<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            [
                'name' => 'Japan',
                'flag' => '🇯🇵',
                'slug' => 'japan',
                'description' => 'Home of Studio Ghibli, Toei Animation, and countless anime masterpieces.',
            ],
            [
                'name' => 'South Korea',
                'flag' => '🇰🇷',
                'slug' => 'south-korea',
                'description' => 'Premier animation production hub for international collaborations.',
            ],
            [
                'name' => 'United States',
                'flag' => '🇺🇸',
                'slug' => 'united-states',
                'description' => 'Pixar, Disney Animation, and DreamWorks Studios.',
            ],
            [
                'name' => 'France',
                'flag' => '🇫🇷',
                'slug' => 'france',
                'description' => 'European animation excellence with artistic innovation.',
            ],
            [
                'name' => 'United Kingdom',
                'flag' => '🇬🇧',
                'slug' => 'united-kingdom',
                'description' => 'Aardman Animations and British animation tradition.',
            ],
            [
                'name' => 'China',
                'flag' => '🇨🇳',
                'slug' => 'china',
                'description' => 'Emerging animation powerhouse with rich visual storytelling.',
            ],
            [
                'name' => 'Spain',
                'flag' => '🇪🇸',
                'slug' => 'spain',
                'description' => 'European animation studios with distinctive style.',
            ],
            [
                'name' => 'Canada',
                'flag' => '🇨🇦',
                'slug' => 'canada',
                'description' => 'Warner Bros. Animation and independent studios.',
            ],
            [
                'name' => 'Germany',
                'flag' => '🇩🇪',
                'slug' => 'germany',
                'description' => 'German animation industry with precision and creativity.',
            ],
            [
                'name' => 'Italy',
                'flag' => '🇮🇹',
                'slug' => 'italy',
                'description' => 'Italian animation heritage and contemporary studios.',
            ],
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate(
                ['name' => $country['name']],
                $country
            );
        }
    }
}
