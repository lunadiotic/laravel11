<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::group(
    [
        'prefix' => 'movie',
        'as' => 'movie.'
    ],
    function () {
        Route::get('/', [MovieController::class, 'index'])->name('index'); //route('movie.index');
        Route::get('/create', [MovieController::class, 'create'])->name('create');
        Route::get('/{id}', [MovieController::class, 'show'])->name('show');
        Route::post('/', [MovieController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [MovieController::class, 'edit'])->name('edit');
        Route::put('/{id}', [MovieController::class, 'update'])->name('update');
        // Route::patch('/{id}', [MovieController::class, 'update']);
        Route::delete('/{id}', [MovieController::class, 'destroy'])->name('destroy');
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
