<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function catalogo(Request $request)
{
    $query = Movie::query();

    // Buscar
    if ($request->filled('search')) {

        $query->where(
            'title',
            'like',
            '%' . $request->search . '%'
        );

    }

    // Ordenar
    if ($request->sort === 'popular') {

        $query->withCount('likes')
              ->orderByDesc('likes_count');

    } else {

        $query->latest();

    }

    $movies = $query->get();

    return view('pages.catalogo', compact('movies'));
}

    public function index(Request $request)
    {
        $query = Movie::with(['country','characters','reviews']);

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        switch ($request->sort) {

            case 'rating':
                $query->orderByDesc('rating');
                break;

            case 'year':
                $query->orderByDesc('release_year');
                break;

            case 'favorites':
                $query->orderByDesc('favorite_count');
                break;

            default:
                $query->latest();
                break;
        }

        return response()->json($query->paginate(25));
    }

    public function show($id)
    {
        $movie = Movie::with(['reviews.user','likes'])->findOrFail($id);

        return view('pages.movie', compact('movie'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'poster_path' => 'nullable|string',
            'backdrop_path' => 'nullable|string',
            'release_year' => 'required|integer',
            'duration' => 'nullable|integer',
            'rating' => 'nullable|numeric|min:0|max:10',
            'studio' => 'nullable|string|max:255',
            'genre' => 'nullable|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $movie = Movie::create($validated);

        return response()->json([
            'message' => 'Movie created successfully',
            'movie' => $movie
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'synopsis' => 'sometimes|string',
            'poster_path' => 'nullable|string',
            'backdrop_path' => 'nullable|string',
            'release_year' => 'sometimes|integer',
            'duration' => 'nullable|integer',
            'rating' => 'nullable|numeric|min:0|max:10',
            'studio' => 'nullable|string|max:255',
            'genre' => 'nullable|string|max:255',
            'country_id' => 'sometimes|exists:countries,id',
        ]);

        if (isset($validated['title'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $movie->update($validated);

        return response()->json([
            'message' => 'Movie updated successfully',
            'movie' => $movie
        ]);
    }

    public function destroy($id)
    {
        Movie::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Movie deleted successfully'
        ]);
    }

    public function toggleLike(Movie $movie)
    {
        $user = auth()->user();

        $like = $movie->likes()
            ->where('user_id', $user->id)
            ->first();

        if ($like) {
            $like->delete();
            return back();
        }

        $movie->likes()->create([
            'user_id' => $user->id
        ]);

        return back();
    }

    public function storeReview(Request $request, Movie $movie)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:10',
            'comment' => 'nullable|string'
        ]);

        Review::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'movie_id' => $movie->id,
            ],
            [
                'rating' => $request->rating,
                'comment' => $request->comment,
            ]
        );

        return back();
    }

    public function home()
{
    $movies = Movie::latest()->take(10)->get();

    $trending = Movie::withCount(['likes','reviews'])
        ->withAvg('reviews','rating')
        ->orderByDesc('likes_count')
        ->take(8)
        ->get();

    $featured = Movie::latest()->first(); // 👈 IMPORTANTE

    return view('pages.home', compact('movies','trending','featured'));
}

  public function toggleFavorite(Movie $movie)
{
    $user = Auth::user();

    $favorite = Favorite::where('user_id', $user->id)
        ->where('movie_id', $movie->id)
        ->first();

    if ($favorite) {
        $favorite->delete();
    } else {
        Favorite::create([
            'user_id' => $user->id,
            'movie_id' => $movie->id,
        ]);
    }

    return back();
}
}