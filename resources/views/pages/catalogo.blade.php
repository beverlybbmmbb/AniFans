@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-white py-12 px-6">

    <div class="max-w-7xl mx-auto">

        {{-- HEADER --}}
        <div class="mb-12">

            <h1 class="text-5xl font-bold text-gray-900 mb-3">
                Catálogo de películas
            </h1>

            <p class="text-lg text-gray-600">
                Explora cientos de películas de animación en nuestro catálogo curado
            </p>

        </div>

        {{-- SEARCH + FILTERS --}}
        <form method="GET"
              action="{{ url('/catalogo') }}"
              class="mb-12 flex flex-col sm:flex-row gap-4 items-start sm:items-center">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Buscar película..."
                class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all">

            <button
                type="submit"
                class="px-6 py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all">
                Buscar
            </button>

            <div class="flex gap-3">

                <a href="{{ url('/catalogo?sort=popular') }}"
                   class="px-6 py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all">

                    Populares

                </a>

                <a href="{{ url('/catalogo?sort=latest') }}"
                   class="px-6 py-3 border border-gray-300 text-gray-900 font-semibold rounded-lg hover:border-black hover:bg-gray-50 transition-all">

                    Recientes

                </a>

            </div>

        </form>

        {{-- MOVIES GRID --}}
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-5">

            @forelse($movies as $movie)

                <a href="{{ url('/catalogo/' . $movie->id) }}"
                   class="group">

                    <div class="aspect-[2/3] rounded-xl overflow-hidden bg-gray-200 shadow-sm">

                        <img
                            src="{{ asset($movie->poster_path) }}"
                            alt="{{ $movie->title }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    </div>

                    <p class="mt-3 text-sm font-semibold text-gray-900 group-hover:underline">
                        {{ $movie->title }}
                    </p>

                    <p class="text-xs text-gray-500">
                        {{ $movie->release_year }}
                    </p>

                </a>

            @empty

                <div class="col-span-full text-center py-20">

                    <h3 class="text-xl font-semibold text-gray-700 mb-2">
                        No se encontraron películas
                    </h3>

                    <p class="text-gray-500">
                        Prueba con otro término de búsqueda.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection