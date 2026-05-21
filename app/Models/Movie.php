<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'year',
        'duration',
        'studio',
        'country_id',
        'rating',
        'poster'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}