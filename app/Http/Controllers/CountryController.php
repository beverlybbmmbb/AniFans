<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    public function index(Request $request)
    {
           $countries = Country::withCount('movies')
        ->orderByDesc('movies_count')
        ->get();

    return view('pages.paises', compact('countries'));

        if ($request->wantsJson()) {
            return response()->json($countries);
        }

        return view('pages.paises', compact('countries'));
    }

    public function show(Country $country)
    {
        $country->load('movies');

        if (request()->wantsJson()) {
            return response()->json($country);
        }

        return view('pages.country-detail', compact('country'));
    }

    public function store(Request $request)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string|unique:countries|max:255',
            'flag' => 'nullable|string|max:10',
            'description' => 'nullable|string',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        $country = Country::create($validated);

        return response()->json(['message' => 'Country created!', 'country' => $country], 201);
    }

    public function update(Request $request, Country $country)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string|unique:countries,name,' . $country->id . '|max:255',
            'flag' => 'nullable|string|max:10',
            'description' => 'nullable|string',
        ]);

        $country->update($validated);

        return response()->json(['message' => 'Country updated!', 'country' => $country]);
    }

    public function destroy(Country $country)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        if ($country->movies()->count() > 0) {
            return response()->json(['message' => 'Cannot delete country with movies'], 422);
        }

        $country->delete();

        return response()->json(['message' => 'Country deleted!']);
    }
}
