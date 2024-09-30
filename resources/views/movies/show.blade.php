@extends('app')

@section('content')
<div class="flex flex-col md:flex-row items-start">
    <!-- Movie Poster -->
    <div class="w-full md:w-1/3">
        <img src="{{ $movie['image'] }}" alt="Oppenheimer Poster" class="rounded-lg shadow-lg">
    </div>

    <!-- Movie Details -->
    <div class="md:ml-10 mt-5 md:mt-0 w-full md:w-2/3">
        <h2 class="text-4xl font-bold mb-4">{{ $movie['title'] }}</h2>
        <p class="text-gray-400 text-lg mb-4">Release Date: <span class="text-white">{{ $movie['release_date'] }}</span></p>
        <p class="text-lg mb-4">{{ $movie['description'] }}</p>

        <h3 class="text-xl font-semibold mb-2">Cast</h3>
        <p class="text-gray-300 mb-4">
            @foreach ($movie['cast'] as $cast)
                {{ $cast }},
            @endforeach
        </p>

        <h3 class="text-xl font-semibold mb-2">Genres</h3>
        <p class="text-gray-300 mb-4">
            @foreach ($movie['genres'] as $genre)
                {{ $genre }},
            @endforeach
        </p>

        <!-- Edit/Delete Buttons -->
        <div class="flex space-x-4 mt-5">
            <button class="bg-green-600 px-4 py-2 rounded hover:bg-green-500">
                Edit Movie
            </button>
            <button class="bg-red-600 px-4 py-2 rounded hover:bg-red-500">
                Delete Movie
            </button>
        </div>
    </div>
</div>
@endsection
