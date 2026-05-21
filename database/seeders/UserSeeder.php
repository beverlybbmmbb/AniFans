<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@anifans.com'],
            [
                'username' => 'admin',
                'email' => 'admin@anifans.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://ui-avatars.com/api/?name=Admin&background=c24e30&color=fdfaf4',
                'bio' => 'AniFans Platform Administrator',
                'role' => 'admin',
            ]
        );

        $users = [
            [
                'username' => 'cinema_lover',
                'email' => 'cinema@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://ui-avatars.com/api/?name=Cinema+Lover&background=2e6b2e&color=fdfaf4',
                'bio' => 'Passionate about animated cinema',
                'role' => 'user',
            ],
            [
                'username' => 'ghibli_fan',
                'email' => 'ghibli@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://ui-avatars.com/api/?name=Ghibli+Fan&background=d4a373&color=2d1f0e',
                'bio' => 'Studio Ghibli enthusiast',
                'role' => 'user',
            ],
            [
                'username' => 'anime_critic',
                'email' => 'critic@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://ui-avatars.com/api/?name=Anime+Critic&background=c24e30&color=fdfaf4',
                'bio' => 'Critical reviews of animated films',
                'role' => 'user',
            ],
            [
                'username' => 'artistry_seeker',
                'email' => 'artist@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://ui-avatars.com/api/?name=Artistry+Seeker&background=f0e6cc&color=2d1f0e',
                'bio' => 'Lover of animation artistry',
                'role' => 'user',
            ],
            [
                'username' => 'pixel_perfectionist',
                'email' => 'pixel@example.com',
                'password' => Hash::make('password'),
                'avatar' => 'https://ui-avatars.com/api/?name=Pixel+Perfectionist&background=2e6b2e&color=fdfaf4',
                'bio' => 'Technical animation aficionado',
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
