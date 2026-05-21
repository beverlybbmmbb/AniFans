<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        return Review::create([
            'user_id' => Auth::id(),
            'movie_id' => $request->movie_id,
            'rating' => $request->rating,
            'comment' => $request->comment
        ]);
    }
}