<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'comment' => 'required|string|max:1000',
            'rating' => 'required|numeric|min:1|max:10',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'movie_id' => $request->movie_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return back()->with('success', 'Reseña publicada');
    }
}