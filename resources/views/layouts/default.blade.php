<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Chansaw Manga')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
</html>