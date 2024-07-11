<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$movies = [];

for ($i = 0; $i < 10; $i++) {
    $movies[] = [
        'title' => "Movie {$i}",
        'year' => 2000 + $i,
        'genre' => 'Action',
    ];
}

Route::prefix('/movie')->name('movie.')->group(function () use ($movies) {
    Route::get('/', function () use ($movies) {
        echo '<h1>Movie</h1>';
        echo '<ul>';

        foreach ($movies as $movie) {
            echo '<li>' . $movie['title'] . ' ' . $movie['year'] . ' ' . $movie['genre'] . '</li>';
        }

        echo '</ul>';
    });

    Route::get('/{id}', function ($id) use ($movies) {
        echo '<h1>Movie</h1>';
        echo '<ul>';

        echo '<li>' . $movies[$id]['title'] . ' ' . $movies[$id]['year'] . ' ' . $movies[$id]['genre'] . '</li>';
    });

    Route::post('/', function () use ($movies) {
        $movies[] = [
            'title' => request('title'),
            'year' => request('year'),
            'genre' => request('genre'),
        ];

        echo '<h1>Movie</h1>';
        echo '<ul>';

        foreach ($movies as $movie) {
            echo '<li>' . $movie['title'] . ' ' . $movie['year'] . ' ' . $movie['genre'] . '</li>';
        }

        echo '</ul>';
    });

    Route::put('/{id}', function ($id) use ($movies) {
        $movies[$id] = [
            'title' => request('title'),
            'year' => request('year'),
            'genre' => request('genre'),
        ];

        echo '<h1>Movie</h1>';
        echo '<ul>';

        foreach ($movies as $movie) {
            echo '<li>' . $movie['title'] . ' ' . $movie['year'] . ' ' . $movie['genre'] . '</li>';
        }

        echo '</ul>';
    });

    Route::delete('/{id}', function ($id) use ($movies) {
        unset($movies[$id]);

        echo '<h1>Movie</h1>';
        echo '<ul>';

        foreach ($movies as $movie) {
            echo '<li>' . $movie['title'] . ' ' . $movie['year'] . ' ' . $movie['genre'] . '</li>';
        }

        echo '</ul>';
    });
});
