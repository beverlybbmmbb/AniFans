<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LISTAR PERSONAJES
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $characters = Character::all();

        return view('pages.personajes', compact('characters'));
    }

    /*
    |--------------------------------------------------------------------------
    | MOSTRAR PERSONAJE
    |--------------------------------------------------------------------------
    */
    public function show($id)
    {
        $character = Character::findOrFail($id);

        return response()->json($character);
    }

    /*
    |--------------------------------------------------------------------------
    | PERSONAJES POR PELÍCULA
    |--------------------------------------------------------------------------
    */
    public function byMovie($movieId)
    {
        $characters = Character::where('movie_id', $movieId)->get();

        return response()->json($characters);
    }

    /*
    |--------------------------------------------------------------------------
    | CREAR PERSONAJE
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $character = Character::create([
            'name' => $request->name,
            'description' => $request->description,
            'movie_id' => $request->movie_id,
            'image' => $request->image,
        ]);

        return response()->json([
            'message' => 'Character created successfully',
            'character' => $character
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | ACTUALIZAR PERSONAJE
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $character = Character::findOrFail($id);

        $character->update([
            'name' => $request->name ?? $character->name,
            'description' => $request->description ?? $character->description,
            'movie_id' => $request->movie_id ?? $character->movie_id,
            'image' => $request->image ?? $character->image,
        ]);

        return response()->json([
            'message' => 'Character updated successfully',
            'character' => $character
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | ELIMINAR PERSONAJE
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $character = Character::findOrFail($id);

        $character->delete();

        return response()->json([
            'message' => 'Character deleted successfully'
        ]);
    }
}