@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">

    <!-- HERO -->
    <div class="bg-black text-white py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold">Mi Perfil</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-8">

        <!-- USER CARD -->
<div class="bg-white p-8 rounded-lg border">

    <!-- AVATAR -->
    <div class="text-center">

        <div class="mx-auto w-28 h-28 rounded-full overflow-hidden bg-gray-200 mb-4">

            @if($user->avatar)
                
            @else
                <div class="w-full h-full flex items-center justify-center text-3xl font-bold bg-black text-white">
                    {{ strtoupper($user->username[0]) }}
                </div>
            @endif

        </div>

        <h2 class="text-2xl font-bold">
            {{ $user->username }}
        </h2>

        <p class="text-gray-500 text-sm">
            Miembro desde {{ $user->created_at->format('d/m/Y') }}
        </p>

    </div>

    <!-- INFO -->
    <div class="mt-8 space-y-4">

        <div class="border-b pb-3">
            <p class="text-xs uppercase text-gray-400">
                Correo
            </p>

            <p class="font-medium">
                {{ $user->email }}
            </p>
        </div>

        <div class="border-b pb-3">
            <p class="text-xs uppercase text-gray-400">
                Edad
            </p>

            <p class="font-medium">
                {{ $user->age ?? 'No especificada' }}
            </p>
        </div>

        <div class="border-b pb-3">
            <p class="text-xs uppercase text-gray-400">
                Género
            </p>

            <p class="font-medium">
                {{ $user->gender ?? 'No especificado' }}
            </p>
        </div>

        <div class="border-b pb-3">
            <p class="text-xs uppercase text-gray-400">
                Rol
            </p>

            <p class="font-medium">
                {{ ucfirst($user->role) }}
            </p>
        </div>

        <div class="border-b pb-3">
            <p class="text-xs uppercase text-gray-400">
                Biografía
            </p>

            <p class="font-medium text-sm">
                {{ $user->bio ?: 'Sin biografía.' }}
            </p>
        </div>

        <div class="border-b pb-3">
            <p class="text-xs uppercase text-gray-400">
                Puntos Trivia
            </p>

            <p class="font-bold text-xl text-purple-600">
                {{ $user->triviaResults->sum('score') }}
            </p>
        </div>

        <div class="grid grid-cols-2 gap-3 pt-2">

            <div class="bg-gray-100 rounded-lg p-3 text-center">
                <p class="text-2xl font-bold">
                    {{ $user->reviews->count() }}
                </p>

                <p class="text-xs text-gray-500">
                    Reseñas
                </p>
            </div>

            <div class="bg-gray-100 rounded-lg p-3 text-center">
                <p class="text-2xl font-bold">
                    {{ $user->favorites->count() }}
                </p>

                <p class="text-xs text-gray-500">
                    Favoritos
                </p>
            </div>

        </div>

    </div>

    @auth
        @if(auth()->id() === $user->id)

            <button class="mt-6 w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition">
                Editar perfil
            </button>

        @endif
    @endauth

</div>

        <!-- CONTENT -->
        <div class="md:col-span-2 space-y-10">

            <!-- REVIEWS -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Mis reseñas</h2>

                <div class="space-y-4">
                    @forelse($user->reviews as $review)
                        <div class="border p-4 rounded-lg bg-white">

                            <h3 class="font-bold">
                                {{ $review->movie->title }}
                            </h3>

                            <p class="text-yellow-500">
                                {{ str_repeat('⭐', (int)$review->rating) }}
                                <span class="text-gray-500 text-sm ml-2">
                                    {{ $review->rating }}/10
                                </span>
                            </p>

                            <p class="text-gray-700 mt-2">
                                {{ $review->comment }}
                            </p>
                        </div>
                    @empty
                        <p class="text-gray-500">No tienes reseñas aún.</p>
                    @endforelse
                </div>
            </div>

            <!-- FAVORITES -->
            <div>
    <h2 class="text-2xl font-bold mb-6">Películas favoritas</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

@forelse($user->favorites as $favorite)

    <a href="{{ url('/catalogo/' . $favorite->movie->id) }}"
       class="group relative overflow-hidden rounded-xl shadow-lg">

        <img src="{{ asset($favorite->movie->poster_path) }}"
             class="w-full h-64 object-cover group-hover:scale-110 transition duration-300">

        <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition"></div>

        <div class="absolute bottom-0 p-2 text-white font-semibold text-sm">
            {{ $favorite->movie->title }}
        </div>

    </a>

@empty
    <p class="text-gray-500 col-span-4">No tienes favoritos aún</p>
@endforelse

</div>
</div>
    </div>
</div>

@endsection