<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

    <!-- Header Section -->
    @include('partials._header')

    <!-- Movie List Section -->
    <section class="container mx-auto p-5">
        @yield('content')
    </section>
</body>
</html>
