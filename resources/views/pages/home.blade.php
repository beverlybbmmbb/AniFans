@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════
     HERO VIDEO
════════════════════════════════════════════ --}}
<section class="relative h-screen overflow-hidden bg-black text-white flex items-center justify-center text-center">

    {{-- VIDEO --}}
    <video
        autoplay
        muted
        loop
        playsinline
        class="absolute inset-0 w-full h-full object-cover"
    >
        <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
    </video>

    {{-- OVERLAY OSCURO --}}
    <div class="absolute inset-0 bg-black/70"></div>

    {{-- GLOW --}}
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-black/20"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 px-6 max-w-5xl mx-auto">

        

        {{-- TITLE --}}
<img
    src="{{ asset('images/logo/logo.png') }}"
    alt="ANIIFANS"
    style="width: 290px; filter: brightness(0) invert(1);"
    class="mx-auto block"
/>

        {{-- DESCRIPTION --}}
<p class="text-sm md:text-base text-white/90 leading-relaxed max-w-xl mx-auto mb-8">
            Explora, analiza y debate sobre las mejores películas
            de animación del mundo. Ghibli, Pixar,
            DreamWorks y mucho más.

        </p>

        {{-- BUTTONS --}}
        <div class="flex flex-wrap justify-center gap-4">

            <a href="{{ url('/catalogo') }}"
   class="px-6 py-3 bg-white text-black rounded-full font-semibold hover:scale-105 transition duration-300">

                Explorar catálogo ↗

            </a>

            <a href="{{ url('/foro') }}"
   class="px-6 py-3 border border-white/20 rounded-full hover:bg-white hover:text-black transition duration-300">

                Ver comunidad ↓

            </a>

        </div>

    </div>

    {{-- FADE BOTTOM --}}
    <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-black to-transparent"></div>

</section>

    {{-- FADE BOTTOM --}}
    <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-black to-transparent"></div>

</section>

{{-- ═══════════════════════════════════════════
     ESTUDIOS EN MOVIMIENTO
════════════════════════════════════════════ --}}
<section class="relative overflow-hidden py-8 bg-black border-y border-white/10">

    {{-- FONDO DEGRADADO --}}
    <div class="absolute inset-0 bg-gradient-to-r from-purple-700 via-whiteto-pink-700"></div>

    {{-- GLOW --}}
    <div class="absolute inset-0 bg-gradient-to-r from-purple-900/20 via-transparent to-pink-500/20 blur-2xl"></div>

    {{-- CONTENEDOR --}}
    <div class="relative w-full overflow-hidden">

        {{-- TRACK --}}
        <div class="flex animate-marquee min-w-max items-center">

            @php
                $studios = [
                    'PIXAR ✦',
                    'DREAMWORKS ✦',
                    'STUDIO GHIBLI ✦',
                    'DISNEY ✦',
                    'SONY ANIMATION ✦',
                    'LAIKA ✦',
                    'ILLUMINATION ✦',
                ];
            @endphp

            {{-- DUPLICADO PARA LOOP --}}
            @for($i = 0; $i < 2; $i++)

                @foreach($studios as $studio)

                    <span class="
                        mx-14
                        text-sm
                        md:text-base
                        font-black
                        uppercase
                        tracking-[0.25em]
                        whitespace-nowrap
                        bg-gradient-to-r
                        from-purple-300
                        via-white
                        to-pink-300
                        bg-clip-text
                        text-transparent
                        hover:scale-110
                        transition
                        duration-300
                    ">
                        {{ $studio }}
                    </span>

                @endforeach

            @endfor

        </div>

    </div>

</section>

<style>

@keyframes marquee {

    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }

}

.animate-marquee {

    width: max-content;

    animation:
        marquee 18s linear infinite;

}

</style>


{{-- ═══════════════════════════════════════════
     FEATURES
════════════════════════════════════════════ --}}
<section class="py-28 px-6 bg-white">
    <div class="max-w-6xl mx-auto">

        <div class="text-center mb-16">
            <p class="text-xs tracking-[0.2em] uppercase text-gray-400 mb-4">¿Qué es AniFans?</p>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight">
                Más que una plataforma
            </h2>
            <p class="text-gray-500 mt-4 max-w-lg mx-auto leading-relaxed">
                Un lugar donde los fans descubren, debaten y valoran películas.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="border border-gray-100 rounded-2xl p-8 hover:-translate-y-1 hover:shadow-lg transition">
                <h3 class="font-bold text-lg mb-2">Catálogo curado</h3>
                <p class="text-gray-500 text-sm">Películas organizadas por estudio, año y género.</p>
            </div>

            <div class="bg-black text-white rounded-2xl p-8 hover:-translate-y-1 transition">
                <h3 class="font-bold text-lg mb-2">Comunidad activa</h3>
                <p class="text-white/60 text-sm">Debates reales entre fans y críticas honestas.</p>
            </div>

            <div class="border border-gray-100 rounded-2xl p-8 hover:-translate-y-1 hover:shadow-lg transition">
                <h3 class="font-bold text-lg mb-2">Rankings reales</h3>
                <p class="text-gray-500 text-sm">Lo mejor lo decide la comunidad.</p>
            </div>

        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════
     PELÍCULAS DESTACADAS
════════════════════════════════════════════ --}}
<section id="destacadas" class="py-28 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">

        <div class="flex justify-between items-end mb-12">
            <div>
                <p class="text-xs tracking-[0.2em] uppercase text-gray-400 mb-2">Catálogo</p>
                <h2 class="text-4xl font-bold">Películas destacadas</h2>
            </div>

            <a href="{{ url('/catalogo') }}"
               class="text-sm border px-5 py-2 rounded-full hover:bg-black hover:text-white transition hidden md:block">
                Ver todas →
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            @foreach($movies as $movie)

                <a href="{{ url('/catalogo/' . $movie->id) }}"
                   class="group">

                    <div class="aspect-[2/3] rounded-xl overflow-hidden bg-gray-200">
                        <img src="{{ asset($movie->poster_path) }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <p class="mt-3 text-sm font-semibold group-hover:underline">
                        {{ $movie->title }}
                    </p>

                </a>

            @endforeach

        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════
     COMUNIDAD 
════════════════════════════════════════════ --}}
<section class="py-28 px-6 bg-white">
    <div class="max-w-6xl mx-auto">

        <div class="text-center mb-16">
            <p class="text-xs tracking-[0.2em] uppercase text-gray-400 mb-4">Comunidad</p>
            <h2 class="text-4xl font-bold">Actividad reciente</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="border rounded-2xl p-6 hover:shadow-md transition">
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://i.pravatar.cc/40?img=12" class="rounded-full w-9 h-9">
                    <div>
                        <p class="font-semibold text-sm">usuario1</p>
                        <p class="text-xs text-gray-400">comentó Shrek</p>
                    </div>
                </div>

                <p class="text-gray-600 text-sm italic">
                    “Mejor comedia de animación sin discusión.”
                </p>
            </div>

            <div class="border rounded-2xl p-6 hover:shadow-md transition">
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://i.pravatar.cc/40?img=32" class="rounded-full w-9 h-9">
                    <div>
                        <p class="font-semibold text-sm">usuario2</p>
                        <p class="text-xs text-gray-400">vio Chihiro</p>
                    </div>
                </div>

                <p class="text-gray-600 text-sm italic">
                    “Una obra maestra visual.”
                </p>
            </div>

            <div class="border rounded-2xl p-6 hover:shadow-md transition">
                <div class="flex items-center gap-3 mb-4">
                    <img src="https://i.pravatar.cc/40?img=45" class="rounded-full w-9 h-9">
                    <div>
                        <p class="font-semibold text-sm">admin</p>
                        <p class="text-xs text-gray-400">AniFans</p>
                    </div>
                </div>

                <p class="text-gray-600 text-sm italic">
                    “El cine animado es arte puro.”
                </p>
            </div>

        </div>

        <div class="text-center mt-12">
            <a href="{{ url('/foro') }}"
               class="inline-block px-6 py-2 border rounded-full hover:bg-black hover:text-white transition">
                Ver foro →
            </a>
        </div>

    </div>
</section>

{{-- ═══════════════════════════════════════════
     CTA FINAL
════════════════════════════════════════════ --}}
<section class="py-32 px-6 bg-black text-white text-center">

    <h2 class="text-4xl md:text-6xl font-bold mb-6">
        Empieza tu viaje en AniFans
    </h2>

    <p class="text-white/50 mb-10 max-w-lg mx-auto">
        Valora películas, comenta y descubre nuevas joyas.
    </p>

    @auth
        <a href="{{ url('/catalogo') }}"
           class="px-10 py-3 bg-white text-black rounded-full font-semibold hover:scale-105 transition">
            Ir al catálogo
        </a>
    @else
        <div class="flex gap-3 justify-center">
            <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-black rounded-full">
                Crear cuenta
            </a>
            <a href="{{ route('login') }}" class="px-8 py-3 border border-white/20 rounded-full">
                Login
            </a>
        </div>
    @endauth

</section>

@endsection