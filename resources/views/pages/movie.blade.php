@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-white">

    {{-- HERO --}}
    <div class="bg-black text-white py-20 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-10 items-center">

            {{-- POSTER --}}

           <img
    src="{{ asset($movie->poster_path) }}"
    alt="{{ $movie->title }}"
    class="rounded-xl shadow-2xl mx-auto"
    style="width:290px;">

            {{-- INFO --}}
            <div>

                <h1 class="text-5xl font-bold mb-4">
                    {{ $movie->title }}
                </h1>

                <div class="flex flex-wrap gap-4 text-gray-300 mb-6">

                    <span>{{ $movie->release_year }}</span>

                    @if($movie->duration)
                        <span>• {{ $movie->duration }} min</span>
                    @endif

                    @if($movie->genre)
                        <span>• {{ $movie->genre }}</span>
                    @endif

                    @if($movie->studio)
                        <span>• {{ $movie->studio }}</span>
                    @endif

                </div>

                <p class="text-lg text-gray-300 max-w-3xl">
                    {{ $movie->synopsis }}
                </p>

            </div>

        </div>
    </div>

    {{-- CONTENIDO --}}
    <div class="max-w-7xl mx-auto px-6 py-12">

        <div class="grid md:grid-cols-3 gap-12">

            {{-- IZQUIERDA --}}
            <div class="md:col-span-2">

                <h2 class="text-2xl font-bold mb-6">
                    Comentarios y reseñas
                </h2>

                {{-- FORMULARIO --}}
                @auth

                <form method="POST"
                      action="/movies/{{ $movie->id }}/review"
                      class="mb-12 p-6 border rounded-xl">

                    @csrf

                    <label class="block mb-2 font-semibold">
                        Tu valoración
                    </label>

                    <input type="number"
                           name="rating"
                           min="1"
                           max="10"
                           class="w-full border rounded-lg p-3 mb-4">

                    <textarea
                        name="comment"
                        rows="4"
                        class="w-full border rounded-lg p-3 mb-4"
                        placeholder="Escribe tu opinión..."></textarea>

                    <button class="bg-black text-white px-6 py-3 rounded-lg">
                        Publicar reseña
                    </button>

                </form>

                @endauth

                {{-- REVIEWS --}}
                <div class="space-y-6">

                    @forelse($movie->reviews as $review)

                        <div class="border rounded-xl p-6">

                            <div class="flex items-center gap-3 mb-3">

                                <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center font-bold">

                                    {{ strtoupper(substr($review->user->username,0,1)) }}

                                </div>

                                <div>

                                    <p class="font-bold">
                                        {{ $review->user->username }}
                                    </p>

                                    <p class="text-sm text-gray-500">
                                        {{ $review->created_at->diffForHumans() }}
                                    </p>

                                </div>

                            </div>

                            <div class="mb-3">

                                {{ str_repeat('⭐', $review->rating) }}

                            </div>

                            <p class="text-gray-700">
                                {{ $review->comment }}
                            </p>

                        </div>

                    @empty

                        <p class="text-gray-500">
                            No hay comentarios todavía.
                        </p>

                    @endforelse

                </div>

            </div>

            {{-- SIDEBAR --}}
            <div>

                <div class="sticky top-24 space-y-6">

                    <div class="border rounded-xl p-6">

                        <h3 class="font-bold mb-4">
                            Información
                        </h3>

                        <div class="space-y-3">

                            <p>
                                <strong>Año:</strong>
                                {{ $movie->release_year }}
                            </p>

                            <p>
                                <strong>Estudio:</strong>
                                {{ $movie->studio }}
                            </p>

                            <p>
                                <strong>Género:</strong>
                                {{ $movie->genre }}
                            </p>

                            <p>
                                <strong>Duración:</strong>
                                {{ $movie->duration }} min
                            </p>

                        </div>

                    </div>

                    {{-- FAVORITOS --}}
                    @auth

                    @php
                        $isFav = auth()->user()
                            ->favorites()
                            ->where('movie_id', $movie->id)
                            ->exists();
                    @endphp

                    <form method="POST"
                          action="{{ route('movies.favorite', $movie) }}">

                        @csrf

                        <button
                            class="w-full px-6 py-3 rounded-xl font-semibold text-white
                            {{ $isFav ? 'bg-red-600 hover:bg-red-700' : 'bg-black hover:bg-gray-800' }}">

                            {{ $isFav ? '❤️ Quitar de favoritos' : '⭐ Añadir a favoritos' }}

                        </button>

                    </form>

                    @endauth

                </div>

            </div>

        </div>

    </div>

</div>

@endsection