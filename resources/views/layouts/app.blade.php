<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AniFans</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#fdfaf4] text-[#2d1f0e] font-[Montserrat]">

    {{-- NAVBAR --}}
    @include('layouts.nav')

    {{-- CONTENIDO --}}
    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layouts.footer')

</body>
</html>