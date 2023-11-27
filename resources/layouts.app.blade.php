<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Puedes incluir otros estilos y scripts comunes aquí -->
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto">
        <!-- Puedes agregar un encabezado común aquí -->
        <header>
            <h1 class="text-4xl font-bold text-center my-4">Laravel Criptos App</h1>
            <hr class="my-2">
        </header>

        <!-- Contenido de la página -->
        <div class="mt-4">
            @yield('content')
        </div>

        <!-- Puedes agregar un pie de página común aquí -->
        <footer class="mt-8 text-center">
            <p>&copy; {{ date('Y') }} Laravel Criptos App. Todos los derechos reservados.</p>
        </footer>
    </div>

    <!-- Puedes incluir scripts comunes aquí -->

</body>

</html>