<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>
    <ul>
        <?php foreach($menu as $key => $value): ?>
            <li><a href="<?= $value ?>"><?= $key ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h1>Home Page</h1>
    <ul>
        {{-- @for($index = 0; $index < count($movies); $index++)
            <li>{{ $movies[$index]['title'] }} - {{ $movies[$index]['year'] }}</li>
        @endfor --}}

        {{-- @foreach($movies as $movie)
            @if($movie['year'] < 2000)
                @continue
            @endif

            @if($movie['year'] > 2015)
                @break
            @endif

            <li>{{ $movie['title'] }} - {{ $movie['year'] }}</li>
        @endforeach --}}

        {{-- @forelse ( $movies as $movie )
            <li>{{ $movie['title'] }} - {{ $movie['year'] }}</li>
        @empty
            <li>No movies found.</li>
        @endforelse --}}

        {{-- @php
            $index = 0;
        @endphp

        @while ( $index < count($movies) )
            <li>{{ $movies[$index]['title'] }} - {{ $movies[$index]['year'] }}</li>
            @php
                $index++;
            @endphp
        @endwhile --}}
    </ul>
    @foreach($movies as $movie)
        @include('partials._movie', ['movie' => $movie])
    @endforeach
</body>

</html>
