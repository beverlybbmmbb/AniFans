@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-900 px-6 py-12">
    <div class="w-full max-w-md">
        <!-- CARD -->
        <div class="bg-white rounded-lg shadow-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Bienvenido</h1>
                <p class="text-gray-600 mt-2">Inicia sesión en tu cuenta</p>
            </div>

            <!-- ERRORES -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                    <p class="text-red-600 text-sm font-medium">{{ $errors->first() }}</p>
                </div>
            @endif

            <!-- SUCCESS MESSAGE -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                    <p class="text-green-600 text-sm font-medium">{{ session('success') }}</p>
                </div>
            @endif

            <!-- FORM -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- EMAIL -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Email</label>
                    <input type="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all"
                           placeholder="tu@email.com">
                    @error('email')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Contraseña</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all"
                           placeholder="••••••••">
                    @error('password')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- SUBMIT BUTTON -->
                <button type="submit" class="w-full py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all duration-300">
                    Iniciar sesión
                </button>
            </form>

            <!-- DIVIDER -->
            <div class="my-6 relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-600">O</span>
                </div>
            </div>

            <!-- REGISTER LINK -->
            <p class="text-center text-gray-600">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" class="font-semibold text-black hover:text-gray-700 transition-colors">
                    Crear cuenta
                </a>
            </p>
        </div>

        <!-- FOOTER TEXT -->
        
    </div>
</div>

@endsection