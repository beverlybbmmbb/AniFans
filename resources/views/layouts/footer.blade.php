<footer class="bg-black text-white py-12 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-lg font-bold mb-4">AniFans</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Plataforma global para fans del cine de animación. Descubre, comparte y conecta.
                </p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Explorar</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="{{ url('/') }}" class="hover:text-white transition-colors">Inicio</a></li>
                    <li><a href="{{ url('/catalogo') }}" class="hover:text-white transition-colors">Catálogo</a></li>
                    <li><a href="{{ url('/characters') }}" class="hover:text-white transition-colors">Personajes</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Comunidad</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="{{ url('/foro') }}" class="hover:text-white transition-colors">Foro</a></li>
                    <li><a href="{{ url('/trivia') }}" class="hover:text-white transition-colors">Trivia</a></li>
                </ul>
            </div>
            
        </div>
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 text-sm">© {{ date('Y') }} AniFans</p>
        </div>
    </div>
</footer>