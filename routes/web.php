<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movie', function () {
//    return 'Hello, movie!';

    $movies = [];

    for ($i = 0; $i < 10; $i++) {
        $movies[] = [
            'title' => 'The Matrix',
            'year' => '1999',
            'genre' => 'Action',
        ];
    }

    // return $movies;

    // return movie with foreach and show it without view
    echo '<h1>Movie</h1>';
    echo '<ul>';

    foreach ($movies as $movie) {
        echo '<li>' . $movie['title'] . ' ' . $movie['year'] . ' ' . $movie['genre'] . '</li>';
    }

    echo '</ul>';
});
