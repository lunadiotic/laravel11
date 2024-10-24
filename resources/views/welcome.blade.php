<x-app>
    <x-slot name="sidebar">
        <x-partials.sidebar :menus="[
            ['title' => 'Dashboard', 'link' => '/dashboard'],
            ['title' => 'Profile', 'link' => '/profile'],
            ['title' => 'Settings', 'link' => '/settings'],
        ]"></x-partials.sidebar>
    </x-slot>

    <x-slot name="main">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5">
                @foreach ($movies as $movie)
                    <x-movie-card :index="$loop->index" :image="$movie['image']" :title="$movie['title']" :releasedate="$movie['release_date']" />
                @endforeach
            </div>
        </div>
    </x-slot>

</x-app>
