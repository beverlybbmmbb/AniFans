

<?php $__env->startSection('content'); ?>

<div class="pt-24 max-w-6xl mx-auto">

    <h1 class="text-4xl font-[Playfair Display] text-[#c24e30] mb-6">
        Catálogo
    </h1>

    <div id="moviesGrid" class="grid grid-cols-1 md:grid-cols-3 gap-6"></div>

</div>

<script>
async function loadMovies() {
    const res = await fetch('/api/movies');
    const movies = await res.json();

    const grid = document.getElementById('moviesGrid');

    grid.innerHTML = movies.map(movie => `
        <div class="bg-[#f0e6cc] p-4 rounded-xl shadow hover:-translate-y-1 transition">

            <div class="text-5xl text-center mb-2">🎬</div>

            <h2 class="font-[Playfair Display] text-xl text-[#2d1f0e]">
                ${movie.title}
            </h2>

            <p class="text-sm opacity-70">
                ${movie.year} · ${movie.studio ?? 'Studio'}
            </p>

            <p class="text-xs mt-2">
                ⭐ ${movie.rating}
            </p>

        </div>
    `).join('');
}

loadMovies();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\DAWBEVERLY\UniServerZ\www\AniFans\resources\views/pages/catalogo.blade.php ENDPATH**/ ?>