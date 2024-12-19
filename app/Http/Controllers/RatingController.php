<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $movie = Movie::with('ratings')->get()->filter(function ($movie) {
            return $movie->ratings->avg('rating') > 3;
        })
            ->map(function ($movie) {
                return [
                    'name' => $movie->name,
                    'rating' => $movie->ratings->avg('rating'),
                ];
            })->values();

        return $movie;
    }
}
