<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TriviaResult extends Model
{
   protected $fillable = [
    'user_id',
    'score',
    'correct_answers',
    'total_questions',
    'percentage',
    'xp_earned',
    'time_bonus',
    'completed_at'
];
}