<nav id="navbar"
    class="fixed top-0 w-full z-50 transition-all duration-300
           bg-[#fdfaf4]/80 backdrop-blur border-b border-[#c24e30]/20">

    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">

        {{-- LOGO --}}
        <a href="{{ url('/') }}"
           class="text-2xl font-serif text-[#c24e30] tracking-wide">
            AniFans
        </a>

        {{-- LINKS DESKTOP --}}
        <div class="hidden md:flex gap-6 text-sm font-medium">

            @php
                $current = request()->path();
            @endphp

            <a href="{{ url('/catalogo') }}"
               class="{{ str_contains($current,'catalogo') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]' }}
                      hover:text-[#c24e30] transition pb-1">
                Catálogo
            </a>

            <a href="{{ url('/personajes') }}"
               class="{{ str_contains($current,'personajes') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]' }}
                      hover:text-[#c24e30] transition pb-1">
                Personajes
            </a>

            <a href="{{ url('/trivia') }}"
               class="{{ str_contains($current,'trivia') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]' }}
                      hover:text-[#c24e30] transition pb-1">
                Trivia
            </a>

            <a href="{{ url('/paises') }}"
               class="{{ str_contains($current,'paises') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]' }}
                      hover:text-[#c24e30] transition pb-1">
                Países
            </a>

            <a href="{{ url('/perfil') }}"
               class="{{ str_contains($current,'perfil') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]' }}
                      hover:text-[#c24e30] transition pb-1">
                Mi Perfil
            </a>

        </div>

        {{-- BOTONES LOGIN (DESKTOP) --}}
        <div class="hidden md:flex gap-3">

            <a href="{{ url('/login') }}"
               class="px-4 py-1 border border-[#c24e30] text-[#c24e30]
                      rounded-full text-sm hover:bg-[#c24e30] hover:text-[#fdfaf4]
                      transition">
                Iniciar sesión
            </a>

            <a href="{{ url('/register') }}"
               class="px-4 py-1 bg-[#c24e30] text-[#fdfaf4]
                      rounded-full text-sm hover:opacity-90 transition">
                Registrarse
            </a>

        </div>

        {{-- HAMBURGUESA MOBILE --}}
        <button id="menuBtn"
            class="md:hidden text-[#c24e30] text-2xl">
            ☰
        </button>

    </div>

    {{-- MENÚ MOBILE --}}
    <div id="mobileMenu"
         class="hidden md:hidden flex flex-col gap-3 px-6 pb-4 text-sm">

        <a class="text-[#2d1f0e]" href="{{ url('/catalogo') }}">Catálogo</a>
        <a class="text-[#2d1f0e]" href="{{ url('/personajes') }}">Personajes</a>
        <a class="text-[#2d1f0e]" href="{{ url('/trivia') }}">Trivia</a>
        <a class="text-[#2d1f0e]" href="{{ url('/paises') }}">Países</a>
        <a class="text-[#2d1f0e]" href="{{ url('/perfil') }}">Perfil</a>

    </div>
</nav>

{{-- SCRIPT SIMPLE --}}
<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn?.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // efecto scroll navbar
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('navbar');

        if (window.scrollY > 20) {
            nav.classList.add('shadow-md', 'bg-[#fdfaf4]');
        } else {
            nav.classList.remove('shadow-md', 'bg-[#fdfaf4]');
        }
    });
</script>