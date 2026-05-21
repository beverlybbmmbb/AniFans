<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TriviaResult extends Model
{
    protected $fillable = [
        'user_id',
        'score'
    ];
}