<nav class="fixed top-0 w-full h-16 z-50 bg-white border-b border-gray-200">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-full">

        {{-- LOGO --}}
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo/logo.png') }}" class="h-10 w-auto object-contain">
        </a>

        {{-- LINKS DESKTOP --}}
        <div class="hidden md:flex items-center gap-8 text-sm text-gray-700 font-medium">

            <a href="{{ url('/') }}" class="hover:text-black transition">Inicio</a>
            <a href="{{ url('/catalogo') }}" class="hover:text-black transition">Catálogo</a>
            <a href="{{ url('/foro') }}" class="hover:text-black transition">Foro</a>

            @auth
                <a href="{{ url('/trivia') }}" class="hover:text-black transition">Trivia</a>
            @endauth

        </div>

        {{-- DERECHA --}}
        <div class="flex items-center gap-3">

            {{-- HAMBURGUESA --}}
            <button
                type="button"
                class="md:hidden p-2 text-gray-800"
                onclick="toggleMenu()"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            {{-- GUEST DESKTOP --}}
            @guest
                <div class="hidden md:flex items-center gap-3">

                    <a href="{{ route('login') }}"
                       class="px-5 py-2 text-sm border border-gray-300 rounded-full hover:bg-black hover:text-white transition">
                        Iniciar sesión
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-5 py-2 text-sm bg-black text-white rounded-full hover:bg-gray-800 transition">
                        Crear cuenta
                    </a>

                </div>
            @endguest

            {{-- USER DESKTOP --}}
            @auth
                <div class="relative hidden md:block">

                    <button onclick="document.getElementById('dropdown').classList.toggle('hidden')"
                            class="flex items-center gap-3 px-2 py-1 rounded-full hover:bg-gray-100 transition">

                        <div class="w-9 h-9 rounded-full bg-black text-white flex items-center justify-center text-sm font-bold">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>

                        <span class="text-sm font-medium">
                            {{ auth()->user()->name }}
                        </span>

                    </button>

                    {{-- DROPDOWN --}}
                    <div id="dropdown"
                         class="absolute right-0 mt-3 w-52 bg-white border border-gray-200 rounded-xl shadow-lg hidden overflow-hidden">

                        <a href="{{ route('perfil.show', auth()->user()->id) }}"
                           class="block px-4 py-3 text-sm hover:bg-black hover:text-white transition">
                            Mi perfil
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-3 text-sm text-red-500 hover:bg-black hover:text-white transition">
                                Cerrar sesión
                            </button>
                        </form>

                    </div>

                </div>
            @endauth

        </div>

    </div>

    {{-- MENU MÓVIL MODERNO --}}
    <div id="mobileMenu"
         class="hidden md:hidden fixed inset-0 z-50">

        {{-- overlay --}}
        <div class="absolute inset-0 bg-black/60" onclick="toggleMenu()"></div>

        {{-- panel --}}
        <div id="mobilePanel"
             class="absolute left-0 top-0 h-full w-72 bg-white shadow-xl p-6
                    transform -translate-x-full transition-transform duration-300">

            <h2 class="text-xl font-semibold mb-6 tracking-wide">
                Menú
            </h2>

            <div class="flex flex-col gap-2 text-gray-800 font-medium">

                <a href="{{ url('/') }}"
                   class="px-3 py-2 rounded hover:bg-black hover:text-white transition">
                    Inicio
                </a>

                <a href="{{ url('/catalogo') }}"
                   class="px-3 py-2 rounded hover:bg-black hover:text-white transition">
                    Catálogo
                </a>

                <a href="{{ url('/foro') }}"
                   class="px-3 py-2 rounded hover:bg-black hover:text-white transition">
                    Foro
                </a>

                @auth
                    <a href="{{ url('/trivia') }}"
                       class="px-3 py-2 rounded hover:bg-black hover:text-white transition">
                        Trivia
                    </a>
                @endauth

                <hr class="my-3">

                @auth
                    <a href="{{ route('perfil.show', auth()->user()->id) }}"
                       class="px-3 py-2 rounded hover:bg-black hover:text-white transition">
                        Mi perfil
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="w-full text-left px-3 py-2 text-red-500 rounded hover:bg-black hover:text-white transition">
                            Cerrar sesión
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                       class="px-3 py-2 rounded hover:bg-black hover:text-white transition">
                        Iniciar sesión
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-3 py-2 rounded bg-black text-white hover:bg-gray-800 transition">
                        Crear cuenta
                    </a>
                @endguest

            </div>
        </div>
    </div>

</nav>

<div class="h-16"></div>

{{-- JS --}}
<script>
function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    const panel = document.getElementById('mobilePanel');

    menu.classList.toggle('hidden');

    setTimeout(() => {
        panel.classList.toggle('-translate-x-full');
    }, 10);
}
</script>