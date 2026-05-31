<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AniFans</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen">
    @include('layouts.nav')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('layouts.footer')
    <script>
    document.addEventListener("DOMContentLoaded", () => {

        const elements = document.querySelectorAll(".reveal");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-0");
                }
            });
        }, { threshold: 0.1 });

        elements.forEach(el => observer.observe(el));

    });
    </script>

    @yield('scripts')
</body>
</html>