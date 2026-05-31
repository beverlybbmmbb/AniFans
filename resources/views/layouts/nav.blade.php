<nav class="fixed top-0 w-full h-16 z-50 bg-white border-b border-gray-200">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-full">

        {{-- LOGO --}}
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo/logo.png') }}"
                 class="h-10 w-auto object-contain">
        </a>

        {{-- LINKS --}}
        <div class="hidden lg:flex items-center gap-8 text-sm text-gray-700">

            <a href="{{ url('/') }}" class="hover:text-black transition">Inicio</a>
            <a href="{{ url('/catalogo') }}" class="hover:text-black transition">Catálogo</a>
            <a href="{{ url('/foro') }}" class="hover:text-black transition">Foro</a>

            @auth
                <a href="{{ url('/trivia') }}" class="hover:text-black transition">Trivia</a>
            @endauth

        </div>

        {{-- DERECHA --}}
        <div class="flex items-center gap-3">

            @guest

                <a href="{{ route('login') }}"
                   class="px-5 py-2 text-sm border border-gray-300 rounded-full hover:bg-black hover:text-white transition">
                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}"
                   class="px-5 py-2 text-sm bg-black text-white rounded-full hover:bg-gray-800 transition">
                    Crear cuenta
                </a>

            @endguest

            @auth

                <div class="relative">

                    {{-- BOTÓN USUARIO --}}
                    <button onclick="document.getElementById('dropdown').classList.toggle('hidden')"
                            class="flex items-center gap-3 px-2 py-1 rounded-full hover:bg-gray-100 transition">

                        <div class="w-9 h-9 rounded-full bg-black text-white flex items-center justify-center text-sm font-bold">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>

                        <span class="hidden md:block text-sm font-medium">
                            {{ auth()->user()->name }}
                        </span>

                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>

                    </button>

                    {{-- DROPDOWN --}}
                    <div id="dropdown"
                         class="absolute right-0 mt-3 w-52 bg-white border border-gray-200 rounded-xl shadow-lg hidden overflow-hidden">

                        {{-- PERFIL --}}
                        <a href="{{ route('perfil.show', auth()->user()->id) }}"
                                                     class="block px-4 py-3 text-sm hover:bg-gray-50">
Mi perfil
                        </a>


                        

                        {{-- LOGOUT --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-3 text-sm text-red-500 hover:bg-red-50">
                                Cerrar sesión
                            </button>
                        </form>

                    </div>

                </div>

            @endauth

        </div>

    </div>
</nav>

<div class="h-16"></div>