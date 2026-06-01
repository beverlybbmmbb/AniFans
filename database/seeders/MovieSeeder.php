<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $movies = [

            [
                'title' => 'Vampire Hunter D',
                'synopsis' => 'Un cazador mitad vampiro lucha en un futuro postapocalíptico.',
                'poster_path' => 'images/movies/vampire-hunter-d.webp',
                'release_year' => 1985,
                'duration' => 80,
                'rating' => 8.6,
                'studio' => 'Ashi Productions',
                'genre' => 'Horror',
                'country_id' => 1,
            ],

            [
                'title' => 'El Castillo Ambulante',
                'synopsis' => 'Una joven maldecida entra en el mundo del mago Howl.',
                'poster_path' => 'images/movies/el-castillo-ambulante.webp',
                'release_year' => 2004,
                'duration' => 119,
                'rating' => 9.2,
                'studio' => 'Studio Ghibli',
                'genre' => 'Fantasia',
                'country_id' => 1,
            ],

            [
                'title' => 'Pesadilla Antes de Navidad',
                'synopsis' => 'Jack Skellington descubre la Navidad.',
                'poster_path' => 'images/movies/pesadilla-antes-de-navidad.webp',
                'release_year' => 1993,
                'duration' => 76,
                'rating' => 9.0,
                'studio' => 'Disney',
                'genre' => 'Fantasia Oscura',
                'country_id' => 2,
            ],

            [
                'title' => 'Shrek',
                'synopsis' => 'Un ogro se embarca en una misión para rescatar a una princesa.',
                'poster_path' => 'images/movies/shrek.webp',
                'release_year' => 2001,
                'duration' => 90,
                'rating' => 8.9,
                'studio' => 'DreamWorks',
                'genre' => 'Comedia',
                'country_id' => 2,
            ],

            [
                'title' => 'Shrek 2',
                'synopsis' => 'Shrek conoce a los padres de Fiona.',
                'poster_path' => 'images/movies/shrek-2.webp',
                'release_year' => 2004,
                'duration' => 93,
                'rating' => 8.8,
                'studio' => 'DreamWorks',
                'genre' => 'Comedia',
                'country_id' => 2,
            ],

            [
                'title' => 'Shrek Tercero',
                'synopsis' => 'Shrek debe encontrar al heredero del trono.',
                'poster_path' => 'images/movies/shrek-3.webp',
                'release_year' => 2007,
                'duration' => 93,
                'rating' => 7.8,
                'studio' => 'DreamWorks',
                'genre' => 'Comedia',
                'country_id' => 2,
            ],

            [
                'title' => 'Shrek para Siempre',
                'synopsis' => 'Shrek entra en una realidad alternativa.',
                'poster_path' => 'images/movies/shrek-4.webp',
                'release_year' => 2010,
                'duration' => 93,
                'rating' => 7.6,
                'studio' => 'DreamWorks',
                'genre' => 'Comedia',
                'country_id' => 2,
            ],

            [
                'title' => 'La Princesa Mononoke',
                'synopsis' => 'Una guerra entre humanos y espíritus del bosque.',
                'poster_path' => 'images/movies/la-princesa-mononoke.webp',
                'release_year' => 1997,
                'duration' => 134,
                'rating' => 9.5,
                'studio' => 'Studio Ghibli',
                'genre' => 'Fantasia',
                'country_id' => 1,
            ],

            [
                'title' => 'Polar Express',
                'synopsis' => 'Un niño viaja en un tren mágico al Polo Norte.',
                'poster_path' => 'images/movies/polar-express.webp',
                'release_year' => 2004,
                'duration' => 100,
                'rating' => 8.4,
                'studio' => 'Warner Bros',
                'genre' => 'Navidad',
                'country_id' => 2,
            ],

            [
                'title' => 'La Novia Cadáver',
                'synopsis' => 'Un hombre se casa accidentalmente con una novia muerta.',
                'poster_path' => 'images/movies/la-novia-cadaver.webp',
                'release_year' => 2005,
                'duration' => 77,
                'rating' => 8.8,
                'studio' => 'Laika',
                'genre' => 'Fantasia Oscura',
                'country_id' => 2,
            ],

            [
                'title' => 'La Tumba de las Luciérnagas',
                'synopsis' => 'Dos hermanos sobreviven en Japón durante la guerra.',
                'poster_path' => 'images/movies/la-tumba-de-las-luciernagas.webp',
                'release_year' => 1988,
                'duration' => 89,
                'rating' => 9.7,
                'studio' => 'Studio Ghibli',
                'genre' => 'Drama',
                'country_id' => 1,
            ],

            [
                'title' => 'El Gato con Botas: El Último Deseo',
                'synopsis' => 'El Gato con Botas busca restaurar sus vidas perdidas.',
                'poster_path' => 'images/movies/el-gato-con-botas-ultimo-deseo.webp',
                'release_year' => 2022,
                'duration' => 102,
                'rating' => 9.1,
                'studio' => 'DreamWorks',
                'genre' => 'Aventura',
                'country_id' => 2,
            ],

            [
                'title' => 'Pinocho de Guillermo del Toro',
                'synopsis' => 'Una versión oscura del clásico cuento de Pinocho.',
                'poster_path' => 'images/movies/pinocchio.webp',
                'release_year' => 2022,
                'duration' => 117,
                'rating' => 9.0,
                'studio' => 'Netflix',
                'genre' => 'Fantasia',
                'country_id' => 2,
            ],

            [
                'title' => 'Mary and Max',
                'synopsis' => 'Una amistad entre dos personas por cartas.',
                'poster_path' => 'images/movies/mary-and-max.webp',
                'release_year' => 2009,
                'duration' => 92,
                'rating' => 9.0,
                'studio' => 'Melodrama Pictures',
                'genre' => 'Drama',
                'country_id' => 6,
            ],

            [
                'title' => 'Wolfwalkers',
                'synopsis' => 'Una niña descubre un mundo de hombres lobo.',
                'poster_path' => 'images/movies/wolfwalkers.webp',
                'release_year' => 2020,
                'duration' => 103,
                'rating' => 9.3,
                'studio' => 'Cartoon Saloon',
                'genre' => 'Fantasia',
                'country_id' => 5,
            ],

            [
                'title' => 'Song of the Sea',
                'synopsis' => 'Dos hermanos descubren criaturas del folclore irlandés.',
                'poster_path' => 'images/movies/song-of-the-sea.webp',
                'release_year' => 2014,
                'duration' => 93,
                'rating' => 9.1,
                'studio' => 'Cartoon Saloon',
                'genre' => 'Fantasia',
                'country_id' => 5,
            ],

            [
                'title' => 'Persepolis',
                'synopsis' => 'Una joven crece en medio de la revolución iraní.',
                'poster_path' => 'images/movies/persepolis.webp',
                'release_year' => 2007,
                'duration' => 95,
                'rating' => 8.9,
                'studio' => 'Sony Pictures',
                'genre' => 'Drama',
                'country_id' => 4,
            ],


            [
                'title' => 'Fantasia',
                'synopsis' => 'Película musical experimental de Disney.',
                'poster_path' => 'images/movies/fantasia.webp',
                'release_year' => 1940,
                'duration' => 126,
                'rating' => 8.8,
                'studio' => 'Disney',
                'genre' => 'Fantasia',
                'country_id' => 2,
            ],

            [
                'title' => 'The Iron Giant',
                'synopsis' => 'Un niño se hace amigo de un robot gigante.',
                'poster_path' => 'images/movies/the-iron-giant.webp',
                'release_year' => 1999,
                'duration' => 86,
                'rating' => 9.3,
                'studio' => 'Warner Bros',
                'genre' => 'Ciencia Ficcion',
                'country_id' => 2,
            ],

            [
                'title' => 'Spider-Man: Un Nuevo Universo',
                'synopsis' => 'Miles Morales descubre el multiverso.',
                'poster_path' => 'images/movies/spider-man.webp',
                'release_year' => 2018,
                'duration' => 117,
                'rating' => 9.4,
                'studio' => 'Sony',
                'genre' => 'Superheroes',
                'country_id' => 2,
            ],

            [
                'title' => 'Wall-E',
                'synopsis' => 'Un robot solitario limpia la Tierra.',
                'poster_path' => 'images/movies/wall-e.webp',
                'release_year' => 2008,
                'duration' => 98,
                'rating' => 9.2,
                'studio' => 'Pixar',
                'genre' => 'Ciencia Ficcion',
                'country_id' => 2,
            ],

            [
                'title' => 'Nausicaä del Valle del Viento',
                'synopsis' => 'Una princesa intenta salvar su mundo.',
                'poster_path' => 'images/movies/nausicaa-del-valle-del-viento.webp',
                'release_year' => 1984,
                'duration' => 117,
                'rating' => 9.4,
                'studio' => 'Studio Ghibli',
                'genre' => 'Fantasia',
                'country_id' => 1,
            ],

            [
                'title' => 'Paprika',
                'synopsis' => 'Los sueños y la realidad se mezclan.',
                'poster_path' => 'images/movies/paprika.webp',
                'release_year' => 2006,
                'duration' => 90,
                'rating' => 8.9,
                'studio' => 'Madhouse',
                'genre' => 'Psicologico',
                'country_id' => 1,
            ],

            [
                'title' => 'Ghost in the Shell',
                'synopsis' => 'Una cyborg investiga crimenes digitales.',
                'poster_path' => 'images/movies/ghost-in-the-shell.webp',
                'release_year' => 1995,
                'duration' => 83,
                'rating' => 9.0,
                'studio' => 'Production I.G',
                'genre' => 'Cyberpunk',
                'country_id' => 1,
            ],

            [
                'title' => 'Perfect Blue',
                'synopsis' => 'Una idol pierde la cordura entre realidad y ficción.',
                'poster_path' => 'images/movies/perfect-blue.webp',
                'release_year' => 1997,
                'duration' => 81,
                'rating' => 9.1,
                'studio' => 'Madhouse',
                'genre' => 'Thriller',
                'country_id' => 1,
            ],

            [
                'title' => 'Akira',
                'synopsis' => 'Neo-Tokio y poderes psíquicos peligrosos.',
                'poster_path' => 'images/movies/akira.webp',
                'release_year' => 1988,
                'duration' => 124,
                'rating' => 9.4,
                'studio' => 'Tokyo Movie Shinsha',
                'genre' => 'Cyberpunk',
                'country_id' => 1,
            ],

            [
                'title' => 'Your Name',
                'synopsis' => 'Dos jóvenes intercambian cuerpos.',
                'poster_path' => 'images/movies/your-name.webp',
                'release_year' => 2016,
                'duration' => 106,
                'rating' => 9.2,
                'studio' => 'CoMix Wave Films',
                'genre' => 'Romance',
                'country_id' => 1,
            ],

            [
                'title' => 'El Viaje de Chihiro',
                'synopsis' => 'Una niña entra en un mundo espiritual.',
                'poster_path' => 'images/movies/chihiro.webp',
                'release_year' => 2001,
                'duration' => 125,
                'rating' => 9.6,
                'studio' => 'Studio Ghibli',
                'genre' => 'Fantasia',
                'country_id' => 1,
            ],

            [
                'title' => 'Las Guerreras del K-Pop',
                'synopsis' => 'Grupo de chicas con poderes enfrentan fuerzas oscuras.',
                'poster_path' => 'images/movies/las-guerreras-del-kpop.webp',
                'release_year' => 2024,
                'duration' => 110,
                'rating' => 8.7,
                'studio' => 'Netflix Animation',
                'genre' => 'Accion',
                'country_id' => 2,
            ],

        ];

      foreach ($movies as $movie) {
    $movie['slug'] = Str::slug($movie['title']);

    Movie::create($movie);
}
    }
}