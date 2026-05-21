<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'name',
        'movie_id',
        'image'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}