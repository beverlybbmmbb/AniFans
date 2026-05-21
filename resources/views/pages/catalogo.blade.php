@extends('layouts.app')

@section('content')

<div class="pt-24 pb-20 max-w-6xl mx-auto px-6">

    <h1 class="text-5xl font-[Playfair Display] font-bold text-[#c24e30] mb-2">
        Catálogo de Películas
    </h1>
    
    <p class="text-[#2d1f0e]/60 mb-12">Explora nuestra colección premium de películas animadas</p>

    <!-- Filters -->
    <div class="bg-[#f0e6cc]/50 p-6 rounded-lg mb-12 flex flex-col md:flex-row gap-4">
        <input type="text" id="search" placeholder="Buscar películas..." class="flex-1 px-4 py-2 rounded-lg border border-[#c24e30]/30 focus:outline-none focus:border-[#c24e30]">
        <select id="sort" class="px-4 py-2 rounded-lg border border-[#c24e30]/30 focus:outline-none focus:border-[#c24e30]">
            <option value="">Ordenar...</option>
            <option value="rating">Rating</option>
            <option value="year">Año</option>
            <option value="favorites">Favoritos</option>
        </select>
    </div>

    <div id="moviesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12"></div>

    <div id="pagination" class="flex justify-center gap-2"></div>

</div>

<script>
let currentPage = 1;

async function loadMovies(page = 1) {
    const search = document.getElementById('search').value;
    const sort = document.getElementById('sort').value;

    const params = new URLSearchParams({
        page: page,
        ...(search && { search }),
        ...(sort && { sort })
    });

    try {
        const res = await fetch(`/api/movies?${params}`);
        const data = await res.json();

        const grid = document.getElementById('moviesGrid');

        if (data.data && data.data.length > 0) {
            grid.innerHTML = data.data.map(movie => `
                <div class="bg-[#f0e6cc] rounded-lg overflow-hidden shadow hover:shadow-lg transition-all hover:-translate-y-1">
                    <img src="${movie.poster}" alt="${movie.title}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="font-[Playfair Display] text-lg font-bold text-[#2d1f0e]">
                            ${movie.title}
                        </h2>
                        <p class="text-sm opacity-70">
                            ${movie.release_year} · ${movie.studio || 'Studio'}
                        </p>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-sm font-bold text-[#c24e30]">⭐ ${movie.rating}/10</span>
                            <button onclick="window.toggleFavorite(${movie.id})" class="text-lg hover:scale-125 transition">❤️</button>
                        </div>
                    </div>
                </div>
            `).join('');
        } else {
            grid.innerHTML = '<div class="col-span-full text-center py-12">No hay películas</div>';
        }

        // Pagination
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';
        if (data.last_page > 1) {
            if (data.current_page > 1) {
                const btn = document.createElement('button');
                btn.className = 'px-4 py-2 border border-[#c24e30]/30 rounded hover:bg-[#f0e6cc]';
                btn.textContent = '← Anterior';
                btn.onclick = () => loadMovies(data.current_page - 1);
                pagination.appendChild(btn);
            }

            for (let i = Math.max(1, data.current_page - 1); i <= Math.min(data.last_page, data.current_page + 1); i++) {
                const btn = document.createElement('button');
                btn.className = i === data.current_page ? 'px-4 py-2 bg-[#c24e30] text-white rounded font-bold' : 'px-4 py-2 border border-[#c24e30]/30 rounded hover:bg-[#f0e6cc]';
                btn.textContent = i;
                btn.onclick = () => loadMovies(i);
                pagination.appendChild(btn);
            }

            if (data.current_page < data.last_page) {
                const btn = document.createElement('button');
                btn.className = 'px-4 py-2 border border-[#c24e30]/30 rounded hover:bg-[#f0e6cc]';
                btn.textContent = 'Siguiente →';
                btn.onclick = () => loadMovies(data.current_page + 1);
                pagination.appendChild(btn);
            }
        }

        currentPage = page;
    } catch (error) {
        console.error('Error:', error);
        document.getElementById('moviesGrid').innerHTML = '<div class="col-span-full text-center py-12 text-red-500">Error al cargar</div>';
    }
}

document.getElementById('search').addEventListener('input', () => loadMovies(1));
document.getElementById('sort').addEventListener('change', () => loadMovies(1));

loadMovies();
</script>

@endsection