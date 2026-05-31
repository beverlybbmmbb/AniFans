<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'age',
        'gender',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

   
public function favorites()
{
    return $this->hasMany(Favorite::class);
}

public function reviews()
{
    return $this->hasMany(Review::class);
}

public function likes()
{
    return $this->hasMany(Like::class);
}

public function triviaResults()
{
    return $this->hasMany(TriviaResult::class);
}

    // PRO METHOD (RECOMENDADO)
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

 


}