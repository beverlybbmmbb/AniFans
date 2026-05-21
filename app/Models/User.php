<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'avatar',
        'bio',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function favorites(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'favorites');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function triviaResults(): HasMany
    {
        return $this->hasMany(TriviaResult::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isFavoritedMovie(Movie $movie): bool
    {
        return $this->favorites()->where('movie_id', $movie->id)->exists();
    }

    public function toggleFavorite(Movie $movie): void
    {
        if ($this->isFavoritedMovie($movie)) {
            $this->favorites()->detach($movie->id);
            $movie->decrement('favorite_count');
        } else {
            $this->favorites()->attach($movie->id);
            $movie->increment('favorite_count');
        }
    }
}