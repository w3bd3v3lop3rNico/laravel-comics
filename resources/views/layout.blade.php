<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-head')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include('header')
    </header>
    <main>
        <div>@yield('main')</div>
    </main>
    <footer>
        @include('footer')
    </footer>
</body>
</html>