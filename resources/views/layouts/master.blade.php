<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Laravel 12</title>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>🚀 Sistema de Cadastro</h1>
            <p>Gerencie seus usuários de forma simples e eficiente</p>
            <h1 class='title'>@yield('page_name')</h1>
        </div>

        <div class="content">

            @yield('content')

        </div>

        <div class="footer">
            <p>&copy; 2025 Sistema de Cadastro. Todos os direitos reservados.</p>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>