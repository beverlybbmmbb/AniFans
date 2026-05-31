@extends('layouts.app')

@section('content')

@php
$reviews = \App\Models\Review::with(['user','movie'])
    ->latest()
    ->get();
@endphp

<div class="min-h-screen bg-black text-white">

    {{-- HEADER --}}
    <div class="border-b border-white/10 py-20 px-6">

        <div class="max-w-6xl mx-auto text-center">

            <h1 class="text-5xl md:text-6xl font-bold mb-4 tracking-tight">
                Foro de películas
            </h1>

            <p class="text-white/50 text-lg max-w-2xl mx-auto">
                Discute, debate y comparte opiniones sobre tus películas de animación favoritas
            </p>

        </div>

    </div>

    {{-- CONTENIDO --}}
    <div class="max-w-5xl mx-auto px-6 py-16">

        {{-- LOGIN MESSAGE --}}
        @guest

            <div class="mb-12 bg-white/5 border border-white/10 rounded-2xl p-8 text-center">

                <p class="text-white/60 mb-4">
                    Inicia sesión para participar en el foro
                </p>

                <a href="{{ route('login') }}"
                   class="inline-block px-6 py-3 bg-white text-black rounded-full font-semibold hover:scale-105 transition">
                    Iniciar sesión
                </a>

            </div>

        @endguest

        {{-- POSTS --}}
        <div class="space-y-8">

            @forelse($reviews as $review)

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 hover:-translate-y-1 transition duration-300">

                    <div class="flex items-center gap-4 mb-5">

                        {{-- AVATAR --}}
                        @if($review->user->avatar)

                            <img
                                src="{{ asset($review->user->avatar) }}"
                                class="w-12 h-12 rounded-full object-cover border border-white/10">

                        @else

                            <img
                                src="https://ui-avatars.com/api/?name={{ urlencode($review->user->username) }}&background=111827&color=ffffff"
                                class="w-12 h-12 rounded-full object-cover border border-white/10">

                        @endif

                        <div>

                            <p class="font-semibold">
                                {{ $review->user->username }}
                            </p>

                            <p class="text-xs text-white/40">
                                {{ $review->movie->title }}
                                •
                                {{ $review->created_at->diffForHumans() }}
                            </p>

                        </div>

                    </div>

                    {{-- RATING --}}
                    <div class="mb-4 text-yellow-400 text-sm">

                        {{ str_repeat('⭐', $review->rating) }}

                    </div>

                    {{-- COMMENT --}}
                    <p class="text-white/70 leading-relaxed">

                        {{ $review->comment }}

                    </p>

                </div>

            @empty

                <div class="bg-white/5 border border-white/10 rounded-2xl p-10 text-center">

                    <p class="text-white/50">
                        Todavía no hay comentarios publicados.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</div>

@endsection