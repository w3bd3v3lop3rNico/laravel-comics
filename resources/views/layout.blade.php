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
        <div class="container"><h1>Header</h1></div>
    </header>
    <main>
        <div class="container">@yield('main')</div>
    </main>
    <footer>
        <div class="container">footer</div>
    </footer>
</body>
</html>