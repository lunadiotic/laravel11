<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$movies = [];

for($i = 0; $i < 10; $i++) {
    $movies[] = [
        'title' => 'Movie ' . $i,
        'year' => '2022',
        'genre' => 'Action',
    ];
}

Route::get('/movie', function() use ($movies) {
    echo '<h1>Movies</h1>';
    echo '<ul>';
    foreach($movies as $movie) {
        echo '<li>' . $movie['title'] . ' - ' . $movie['year'] . ' - ' . $movie['genre'] . '</li>';
    }
    echo '</ul>';
});


Route::post('/movie', function() use ($movies) {
    $movies[] = [
        'title' => request('title'),
        'year' => request('year'),
        'genre' => request('genre'),
    ];

    echo '<h1>Movies</h1>';
    echo '<ul>';
    foreach($movies as $movie) {
        echo '<li>' . $movie['title'] . ' - ' . $movie['year'] . ' - ' . $movie['genre'] . '</li>';
    }
    echo '</ul>';
});
