<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class MovieController extends Controller implements HasMiddleware
{
    private $movies = [];

    public function __construct()
    {
        $this->movies = [
            [
                'title' => 'Oppenheimer',
                'description' => 'A historical drama following the life of J. Robert Oppenheimer, the physicist who helped develop the atomic bomb during World War II.',
                'release_date' => '2023-07-21',
                'cast' => ['Cillian Murphy', 'Emily Blunt', 'Matt Damon', 'Robert Downey Jr.', 'Florence Pugh'],
                'genres' => ['Drama', 'History', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/aCzRPvhbBWOdNfwN1gdXK46DMBM.jpg',
            ],
            [
                'title' => 'Barbie',
                'description' => 'Barbie suffers a crisis that leads her to question her world and her existence, taking her on a journey to the real world.',
                'release_date' => '2023-07-21',
                'cast' => ['Margot Robbie', 'Ryan Gosling', 'Simu Liu', 'America Ferrera', 'Kate McKinnon'],
                'genres' => ['Comedy', 'Fantasy'],
                'image' => 'https://image.tmdb.org/t/p/w500/iuFNMS8U5cb6xfzi51Dbkovj7vM.jpg',
            ],
            [
                'title' => 'Mission: Impossible - Dead Reckoning Part One',
                'description' => 'Ethan Hunt and his IMF team must track down a terrifying new weapon that threatens all of humanity if it falls into the wrong hands.',
                'release_date' => '2023-07-12',
                'cast' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames', 'Simon Pegg', 'Rebecca Ferguson'],
                'genres' => ['Action', 'Adventure', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/yF1eOkaYvwiORauRCPWznV9xVvi.jpg',
            ],
            [
                'title' => 'Spider-Man: Across the Spider-Verse',
                'description' => 'Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its existence.',
                'release_date' => '2023-06-02',
                'cast' => ['Shameik Moore', 'Hailee Steinfeld', 'Oscar Isaac', 'Jake Johnson', 'Issa Rae'],
                'genres' => ['Animation', 'Action', 'Adventure'],
                'image' => 'https://image.tmdb.org/t/p/w500/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg',
            ],
            [
                'title' => 'John Wick: Chapter 4',
                'description' => 'With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table.',
                'release_date' => '2023-03-24',
                'cast' => ['Keanu Reeves', 'Donnie Yen', 'Bill Skarsgård', 'Laurence Fishburne', 'Ian McShane'],
                'genres' => ['Action', 'Crime', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg',
            ],
            [
                'title' => 'Guardians of the Galaxy Vol. 3',
                'description' => 'The Guardians embark on a mission to protect one of their own and face new challenges as they unravel the mysteries of the universe.',
                'release_date' => '2023-05-05',
                'cast' => ['Chris Pratt', 'Zoe Saldana', 'Dave Bautista', 'Bradley Cooper', 'Karen Gillan'],
                'genres' => ['Action', 'Adventure', 'Comedy'],
                'image' => 'https://image.tmdb.org/t/p/w500/r2J02Z2OpNTctfOSN1Ydgii51I3.jpg',
            ],
            [
                'title' => 'The Flash',
                'description' => 'Barry Allen uses his super speed to change the past, but his attempt to save his family creates a world without superheroes.',
                'release_date' => '2023-06-16',
                'cast' => ['Ezra Miller', 'Michael Keaton', 'Sasha Calle', 'Ben Affleck', 'Ron Livingston'],
                'genres' => ['Action', 'Adventure', 'Fantasy'],
                'image' => 'https://image.tmdb.org/t/p/w500/3GrRgt6CiLIUXUtoktcv1g2iwT5.jpg',
            ],
            [
                'title' => 'Fast X',
                'description' => 'Dom Toretto and his family are targeted by the vengeful son of drug kingpin Hernan Reyes, Dante, who seeks to destroy everything Dom loves.',
                'release_date' => '2023-05-19',
                'cast' => ['Vin Diesel', 'Michelle Rodriguez', 'Jason Momoa', 'Tyrese Gibson', 'Ludacris'],
                'genres' => ['Action', 'Crime', 'Thriller'],
                'image' => 'https://image.tmdb.org/t/p/w500/1E5baAaEse26fej7uHcjOgEE2t2.jpg',
            ],
            [
                'title' => 'Indiana Jones and the Dial of Destiny',
                'description' => 'Archaeologist Indiana Jones races against time to retrieve a legendary artifact that can change the course of history.',
                'release_date' => '2023-06-30',
                'cast' => ['Harrison Ford', 'Phoebe Waller-Bridge', 'Mads Mikkelsen', 'Boyd Holbrook', 'Antonio Banderas'],
                'genres' => ['Adventure', 'Action'],
                'image' => 'https://image.tmdb.org/t/p/w500/AmY0GgtO5bqGhcdGff0RtYn3S3U.jpg',
            ],
            [
                'title' => 'Transformers: Rise of the Beasts',
                'description' => 'During the 1990s, the Autobots encounter a new faction of Transformers known as the Maximals, who join them as allies in the battle for Earth.',
                'release_date' => '2023-06-09',
                'cast' => ['Anthony Ramos', 'Dominique Fishback', 'Peter Cullen', 'Ron Perlman', 'Peter Dinklage'],
                'genres' => ['Action', 'Science Fiction', 'Adventure'],
                'image' => 'https://image.tmdb.org/t/p/w500/gPbM0MK8CP8A174rmUwGsADNYKD.jpg',
            ]
        ];
    }

    public static function middleware()
    {
        // return [
        //     'isAuth',
        //     new Middleware('isMember', only: ['show']),
        // ];
    }

    public function index()
    {
        $movies = $this->movies;
        // return view('movies.index', ['movies' => $movies]);
        return view('movies.index', compact('movies'))->with([
            'titlePage' => 'Movie List'
        ]);
        // return view('movies.index')->with([
        //     'movies' => $movies
        // ]);
    }

    public function show($id)
    {
        $movie = $this->movies[$id];
        return view('movies.show', ['movie' => $movie]);
    }

    public function store()
    {
        $this->movies[] = [
            'title' => request('title'),
            'year' => request('year'),
            'genre' => request('genre'),
        ];

        return $this->movies;
    }

    public function update($id)
    {
        $this->movies[$id]['title'] = request('title');
        $this->movies[$id]['year'] = request('year');
        $this->movies[$id]['genre'] = request('genre');

        return $this->movies;
    }

    public function destroy($id)
    {
        unset($this->movies[$id]);
        return $this->movies;
    }
}
