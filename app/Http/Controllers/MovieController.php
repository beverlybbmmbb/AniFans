<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LISTAR TODAS LAS PELÍCULAS
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        return response()->json(
            Movie::with(['country', 'characters', 'reviews'])->get()
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREAR PELÍCULA
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $movie = Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year,
            'duration' => $request->duration,
            'studio' => $request->studio,
            'country_id' => $request->country_id,
            'rating' => $request->rating ?? 0,
            'poster' => $request->poster
        ]);

        return response()->json([
            'message' => 'Movie created successfully',
            'movie' => $movie
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | VER UNA PELÍCULA
    |--------------------------------------------------------------------------
    */
    public function show($id)
    {
        return response()->json(
            Movie::with(['country', 'characters', 'reviews'])->findOrFail($id)
        );
    }

    /*
    |--------------------------------------------------------------------------
    | ACTUALIZAR
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $movie->update([
            'title' => $request->title ?? $movie->title,
            'description' => $request->description ?? $movie->description,
            'year' => $request->year ?? $movie->year,
            'duration' => $request->duration ?? $movie->duration,
            'studio' => $request->studio ?? $movie->studio,
            'country_id' => $request->country_id ?? $movie->country_id,
            'rating' => $request->rating ?? $movie->rating,
            'poster' => $request->poster ?? $movie->poster,
        ]);

        return response()->json([
            'message' => 'Movie updated successfully',
            'movie' => $movie
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | ELIMINAR
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json([
            'message' => 'Movie deleted successfully'
        ]);
    }
}