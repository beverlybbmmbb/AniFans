@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-900 px-6 py-12">
    <div class="w-full max-w-md">
        <!-- CARD -->
        <div class="bg-white rounded-lg shadow-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Crear cuenta</h1>
                <p class="text-gray-600 mt-2">Únete a nuestra comunidad de fans</p>
            </div>

            <!-- FORM -->
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- USERNAME -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Usuario</label>
                    <input name="username" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all"
                           placeholder="tu_usuario">
                </div>

                <!-- EMAIL -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Email</label>
                    <input name="email" type="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all"
                           placeholder="tu@email.com">
                    @error('email')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- AGE -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Edad</label>
                    <input name="age" type="number" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all"
                           placeholder="18">
                </div>

                <!-- GENDER -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Género</label>
                    <select name="gender" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all">
                        <option value="">Selecciona</option>
                        <option value="male">Hombre</option>
                        <option value="female">Mujer</option>
                        <option value="other">Otro</option>
                    </select>
                </div>

                <!-- PASSWORD -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Contraseña</label>
                    <input name="password" type="password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all"
                           placeholder="••••••••">
                    @error('password')
                        <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD CONFIRM -->
                <div>
                    <label class="block text-sm font-semibold text-gray-900 mb-2">Confirmar contraseña</label>
                    <input name="password_confirmation" type="password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent transition-all"
                           placeholder="••••••••">
                </div>

                <!-- SUBMIT BUTTON -->
                <button type="submit" class="w-full py-3 bg-black text-white font-semibold rounded-lg hover:bg-gray-800 transition-all duration-300 mt-6">
                    Crear cuenta
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

            <!-- LOGIN LINK -->
            <p class="text-center text-gray-600">
                ¿Ya tienes cuenta?
                <a href="{{ route('login') }}" class="font-semibold text-black hover:text-gray-700 transition-colors">
                    Iniciar sesión
                </a>
            </p>
        </div>

        <!-- FOOTER TEXT -->
        <p class="text-center text-gray-500 text-xs mt-8">
            Al crear una cuenta, aceptas nuestros términos de servicio y política de privacidad
        </p>
    </div>
</div>

@endsection