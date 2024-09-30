<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $movies = [
        ['title' => 'The Matrix', 'year' => 1999],
        ['title' => 'Inception', 'year' => 2010],
        ['title' => 'Interstellar', 'year' => 2014],
        ['title' => 'The Dark Knight', 'year' => 2008],
        ['title' => 'Pulp Fiction', 'year' => 1994],
        ['title' => 'Avengers: Endgame', 'year' => 2019],
        ['title' => 'The Shawshank Redemption', 'year' => 1994],
        ['title' => 'Parasite', 'year' => 2019],
        ['title' => 'The Godfather', 'year' => 1972],
        ['title' => 'Spider-Man: Into the Spider-Verse', 'year' => 2018],
    ];


    return view('home', compact('movies'));
});

Route::group(
    [
        'prefix' => 'movie',
        'as' => 'movie.'
    ],
    function () {
        Route::get('/', [MovieController::class, 'index'])->name('index');
        Route::get('/create', [MovieController::class, 'create'])->name('create');
        Route::get('/{id}', [MovieController::class, 'show'])->name('show');
        Route::post('/', [MovieController::class, 'store'])->name('store');
        Route::put('/{id}', [MovieController::class, 'update']);
        Route::patch('/{id}', [MovieController::class, 'update']);
        Route::delete('/{id}', [MovieController::class, 'destroy']);
    }
);


Route::get('/pricing', function () {
    return 'Please, buy a membership!';
});

Route::get('/login', function () {
    return 'Login page';
})->name('login');


Route::get('/request',  function (Request $request) {
    dd($request);
});
