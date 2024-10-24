<div class="bg-gray-800 p-4 rounded-lg relative group">
    <a href="{{ route('movie.show', $index) }}">
        <img src="{{ $getImage }}" alt="#" class="w-full rounded-md">
        <h3 class="text-lg mt-2">{{ $title }}</h3>
        <p class="text-sm text-gray-400">{{ $releasedate }}</p>
    </a>
</div>
