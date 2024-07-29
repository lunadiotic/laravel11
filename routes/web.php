<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movie', function() {
    $movies = [];

    for($i = 0; $i < 10; $i++) {
        $movies[] = [
            'title' => 'Movie ' . $i,
            'year' => '2022',
            'genre' => 'Action',
        ];
    }

    echo '<h1>Movies</h1>';
    echo '<ul>';
    foreach($movies as $movie) {
        echo '<li>' . $movie['title'] . ' - ' . $movie['year'] . ' - ' . $movie['genre'] . '</li>';
    }
    echo '</ul>';
});
