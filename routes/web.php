<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TriviaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {

    $movies = Movie::latest()->take(10)->get();

    $featured = Movie::latest()->first();

    return view('pages.home', compact('movies', 'featured'));
});

/*
|--------------------------------------------------------------------------
| CATALOGO
|--------------------------------------------------------------------------
*/
Route::get('/catalogo', [MovieController::class, 'catalogo']);
Route::get('/catalogo/{id}', [MovieController::class, 'show']);

/*
|--------------------------------------------------------------------------
| CHARACTERS
|--------------------------------------------------------------------------
*/
Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/{character}', [CharacterController::class, 'show']);

/*
|--------------------------------------------------------------------------
| COUNTRIES
|--------------------------------------------------------------------------
*/
Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/{country}', [CountryController::class, 'show']);

/*
|--------------------------------------------------------------------------
| FORO
|--------------------------------------------------------------------------
*/
Route::get('/foro', function () {
    return view('pages.foro');
});

/*
|--------------------------------------------------------------------------
| TRIVIA
|--------------------------------------------------------------------------
*/
Route::get('/trivia', [TriviaController::class, 'index']);
Route::get('/trivia/questions', [TriviaController::class, 'getQuestions']);
Route::post('/trivia/submit', [TriviaController::class, 'submitAnswers']);
Route::get('/trivia/leaderboard', [TriviaController::class, 'getLeaderboard']);

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/
Route::get('/perfil/{user}', [ProfileController::class, 'show'])->name('perfil.show');
Route::get('/perfil/{user}/favorites', [ProfileController::class, 'getUserFavorites']);
Route::get('/perfil/{user}/reviews', [ProfileController::class, 'getUserReviews']);

/*
|--------------------------------------------------------------------------
| AUTH PROTECTED
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

    Route::post('/movies/{movie}/like', [MovieController::class, 'toggleLike']);
    Route::post('/movies/{movie}/review', [MovieController::class, 'storeReview']);
    Route::post('/movies/{movie}/favorite', [MovieController::class, 'toggleFavorite'])
        ->name('movies.favorite');
});

