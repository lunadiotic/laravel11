<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $movies = [
        [
            'title' => 'Oppenheimer',
            'release_date' => '2023-07-21',
            'image' => '',
        ],
        [
            'title' => 'Barbie',
            'release_date' => '2023-07-21',
            'image' => 'https://image.tmdb.org/t/p/w500/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg',
        ],
        [
            'title' => 'Mission: Impossible - Dead Reckoning Part One',
            'release_date' => '2023-07-12',
            'image' => 'https://image.tmdb.org/t/p/w500/NNxYkU70HPurnNCSiCjYAmacwm.jpg',
        ],
        [
            'title' => 'Spider-Man: Across the Spider-Verse',
            'release_date' => '2023-06-02',
            'image' => 'https://image.tmdb.org/t/p/w500/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg',
        ],
        [
            'title' => 'John Wick: Chapter 4',
            'release_date' => '2023-03-24',
            'image' => 'https://image.tmdb.org/t/p/w500/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg',
        ],
        [
            'title' => 'Guardians of the Galaxy Vol. 3',
            'release_date' => '2023-05-05',
            'image' => 'https://image.tmdb.org/t/p/w500/r2J02Z2OpNTctfOSN1Ydgii51I3.jpg',
        ],
        [
            'title' => 'The Flash',
            'release_date' => '2023-06-16',
            'image' => 'https://image.tmdb.org/t/p/w500/3GrRgt6CiLIUXUtoktcv1g2iwT5.jpg',
        ],
        [
            'title' => 'Fast X',
            'release_date' => '2023-05-19',
            'image' => 'https://image.tmdb.org/t/p/w500/1E5baAaEse26fej7uHcjOgEE2t2.jpg',
        ],
        [
            'title' => 'Indiana Jones and the Dial of Destiny',
            'release_date' => '2023-06-30',
            'image' => 'https://image.tmdb.org/t/p/w500/Af4bXE63pVsb2FtbW8uYIyPBadD.jpg',
        ],
        [
            'title' => 'Transformers: Rise of the Beasts',
            'release_date' => '2023-06-09',
            'image' => 'https://image.tmdb.org/t/p/w500/gPbM0MK8CP8A174rmUwGsADNYKD.jpg',
        ]
    ];
    return view('welcome', ['movies' => $movies]);
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
