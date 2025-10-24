<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Laravel 12</title>
</head>
<body>
    <h1 class='title'>@yield('page_name')</h1>
    @yield('content')
    @vite('resources/js/app.js')
</body>
</html>