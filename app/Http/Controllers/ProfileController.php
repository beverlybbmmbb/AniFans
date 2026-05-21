<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        $user->load(['reviews.movie', 'favorites', 'triviaResults']);

        if (request()->wantsJson()) {
            return response()->json($user);
        }

        return view('pages.perfil', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('pages.profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:users,username,' . $user->id . '|min:3|max:20',
            'bio' => 'nullable|string|max:500',
            'avatar' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user->update($request->only('username', 'bio', 'avatar'));

        return response()->json(['message' => 'Profile updated successfully!', 'user' => $user]);
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['message' => 'Current password is incorrect'], 422);
        }

        $user->update(['password' => Hash::make($request->password)]);

        return response()->json(['message' => 'Password changed successfully!']);
    }

    public function getUserReviews(User $user)
    {
        $reviews = $user->reviews()->with('movie')->latest()->paginate(10);

        if (request()->wantsJson()) {
            return response()->json($reviews);
        }

        return view('pages.user-reviews', compact('user', 'reviews'));
    }

    public function getUserFavorites(User $user)
    {
        $favorites = $user->favorites()->paginate(12);

        if (request()->wantsJson()) {
            return response()->json($favorites);
        }

        return view('pages.user-favorites', compact('user', 'favorites'));
    }

    public function getUserTrivia(User $user)
    {
        $results = $user->triviaResults()->latest()->paginate(10);

        if (request()->wantsJson()) {
            return response()->json($results);
        }

        return view('pages.user-trivia', compact('user', 'results'));
    }
}
