<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'synopsis',
        'poster_path',
        'backdrop_path',
        'release_year',
        'duration',
        'rating',
        'studio',
        'genre',
        'country_id',
        'review_count',
        'favorite_count',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELACIÓN CON PAÍS
    |--------------------------------------------------------------------------
    */
    

    /*
    |--------------------------------------------------------------------------
    | RELACIÓN CON PERSONAJES
    |--------------------------------------------------------------------------
    */
    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    /*
    |--------------------------------------------------------------------------
    | RELACIÓN CON REVIEWS
    |--------------------------------------------------------------------------
    */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /*
    |--------------------------------------------------------------------------
    | RELACIÓN CON FAVORITOS
    |--------------------------------------------------------------------------
    */
   public function favorites()
{
    return $this->hasMany(Favorite::class);
}

    /*
    |--------------------------------------------------------------------------
    | ACCESSOR POSTER URL TMDB
    |--------------------------------------------------------------------------
    */
    public function getPosterUrlAttribute()
    {
        return $this->poster_path
            ? 'https://image.tmdb.org/t/p/w500' . $this->poster_path
            : null;
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSOR BACKDROP URL TMDB
    |--------------------------------------------------------------------------
    */
    public function getBackdropUrlAttribute()
    {
        return $this->backdrop_path
            ? 'https://image.tmdb.org/t/p/original' . $this->backdrop_path
            : null;
    }

    public function likes()
{
    return $this->hasMany(Like::class);
}


}