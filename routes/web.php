<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TriviaController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('pages.home');
})->name('home');

/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| MAIN PAGES (FRONT)
|--------------------------------------------------------------------------
*/
Route::get('/catalogo', [MovieController::class, 'index'])->name('catalogo');
Route::get('/personajes', [CharacterController::class, 'index'])->name('personajes');
Route::get('/trivia', [TriviaController::class, 'index'])->name('trivia');
Route::get('/paises', [CountryController::class, 'index'])->name('paises');

/*
|--------------------------------------------------------------------------
| USER PROFILE
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/perfil/@{user}', [ProfileController::class, 'show'])->name('perfil.show');
    Route::get('/perfil/editar', [ProfileController::class, 'edit'])->name('perfil.edit');
    Route::put('/perfil/actualizar', [ProfileController::class, 'update'])->name('perfil.update');
    Route::put('/perfil/password', [ProfileController::class, 'updatePassword'])->name('perfil.password');
});

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/movies', [AdminController::class, 'moviesIndex'])->name('admin.movies');
    Route::get('/users', [AdminController::class, 'usersIndex'])->name('admin.users');
    Route::get('/reviews', [AdminController::class, 'reviewsIndex'])->name('admin.reviews');
    Route::get('/countries', [AdminController::class, 'countriesIndex'])->name('admin.countries');
});

/*
|--------------------------------------------------------------------------
| API ENDPOINTS
|--------------------------------------------------------------------------
*/
Route::prefix('api')->group(function () {
    
    // Movies
    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/{movie}', [MovieController::class, 'show']);
    Route::post('/movies', [MovieController::class, 'store'])->middleware('auth', 'admin');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->middleware('auth', 'admin');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->middleware('auth', 'admin');
    Route::post('/movies/{movie}/favorite', [MovieController::class, 'toggleFavorite'])->middleware('auth');

    // Characters
    Route::get('/characters', [CharacterController::class, 'index']);
    Route::get('/characters/{character}', [CharacterController::class, 'show']);
    Route::get('/movies/{movie}/characters', [CharacterController::class, 'byMovie']);
    Route::post('/characters', [CharacterController::class, 'store'])->middleware('auth', 'admin');
    Route::put('/characters/{character}', [CharacterController::class, 'update'])->middleware('auth', 'admin');
    Route::delete('/characters/{character}', [CharacterController::class, 'destroy'])->middleware('auth', 'admin');

    // Countries
    Route::get('/countries', [CountryController::class, 'index']);
    Route::get('/countries/{country}', [CountryController::class, 'show']);
    Route::post('/countries', [CountryController::class, 'store'])->middleware('auth', 'admin');
    Route::put('/countries/{country}', [CountryController::class, 'update'])->middleware('auth', 'admin');
    Route::delete('/countries/{country}', [CountryController::class, 'destroy'])->middleware('auth', 'admin');

    // Reviews
    Route::get('/movies/{movie}/reviews', [ReviewController::class, 'show']);
    Route::post('/reviews', [ReviewController::class, 'store'])->middleware('auth');
    Route::put('/reviews/{review}', [ReviewController::class, 'update'])->middleware('auth');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->middleware('auth');

    // Trivia
    Route::get('/trivia/questions', [TriviaController::class, 'getQuestions']);
    Route::post('/trivia/submit', [TriviaController::class, 'submitAnswers'])->middleware('auth');
    Route::get('/trivia/leaderboard', [TriviaController::class, 'getLeaderboard']);
    Route::get('/trivia/results', [TriviaController::class, 'getUserResults'])->middleware('auth');

    // Profile
    Route::get('/profile/{user}', [ProfileController::class, 'show']);
    Route::get('/profile/{user}/reviews', [ProfileController::class, 'getUserReviews']);
    Route::get('/profile/{user}/favorites', [ProfileController::class, 'getUserFavorites']);
    Route::get('/profile/{user}/trivia', [ProfileController::class, 'getUserTrivia']);

    // Admin
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::delete('/users/{user}', [AdminController::class, 'deleteUser']);
        Route::delete('/reviews/{review}', [AdminController::class, 'deleteReview']);
        Route::put('/users/{user}/role', [AdminController::class, 'updateUserRole']);
    });
});