<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
use App\Models\TriviaResult;
use App\Models\Review;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (!Auth::user()->isAdmin()) {
                return redirect('/')->with('error', 'Unauthorized access');
            }
            return $next($request);
        });
    }

    public function dashboard()
    {
        $stats = [
            'total_movies' => Movie::count(),
            'total_users' => User::count(),
            'total_reviews' => Review::count(),
            'total_countries' => Country::count(),
        ];

        $recent_movies = Movie::latest()->limit(5)->get();
        $recent_users = User::where('role', 'user')->latest()->limit(5)->get();
        $top_movies = Movie::orderByDesc('rating')->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_movies', 'recent_users', 'top_movies'));
    }

    public function moviesIndex(Request $request)
    {
        $movies = Movie::with('country')->latest()->paginate(20);

        if ($request->wantsJson()) {
            return response()->json($movies);
        }

        return view('admin.movies-index', compact('movies'));
    }

    public function usersIndex(Request $request)
    {
        $users = User::latest()->paginate(20);

        if ($request->wantsJson()) {
            return response()->json($users);
        }

        return view('admin.users-index', compact('users'));
    }

    public function reviewsIndex(Request $request)
    {
        $reviews = Review::with('user', 'movie')->latest()->paginate(20);

        if ($request->wantsJson()) {
            return response()->json($reviews);
        }

        return view('admin.reviews-index', compact('reviews'));
    }

    public function countriesIndex(Request $request)
    {
        $countries = Country::withCount('movies')->latest()->paginate(20);

        if ($request->wantsJson()) {
            return response()->json($countries);
        }

        return view('admin.countries-index', compact('countries'));
    }

    public function deleteUser(User $user)
    {
        if ($user->isAdmin()) {
            return response()->json(['message' => 'Cannot delete admin users'], 422);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully!']);
    }

    public function deleteReview(Review $review)
    {
        $review->delete();

        return response()->json(['message' => 'Review deleted successfully!']);
    }

    public function updateUserRole(Request $request, User $user)
    {
        $validated = $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        $user->update($validated);

        return response()->json(['message' => 'User role updated!', 'user' => $user]);
    }
}
