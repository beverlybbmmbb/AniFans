<?php $__env->startSection('content'); ?>


<section class="relative overflow-hidden min-h-screen flex items-center justify-center px-6">

    
    <div class="absolute inset-0 bg-gradient-to-br from-[#fdfaf4] via-[#f6edd8] to-[#e8d49a]"></div>

    
    <div class="absolute top-20 left-10 w-52 h-72 bg-[#c24e30]/10 rounded-3xl rotate-[-8deg] shadow-2xl hidden lg:block"></div>
    <div class="absolute bottom-20 right-10 w-52 h-72 bg-[#2e6b2e]/10 rounded-3xl rotate-[8deg] shadow-2xl hidden lg:block"></div>

    <div class="relative z-10 max-w-6xl mx-auto text-center">

        
        <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-[#c24e30]/40 text-[#c24e30] bg-[#fdfaf4]/70 backdrop-blur mb-8 text-sm tracking-wide">
            ✦ La mayor plataforma de animación global
        </div>

        
        <h1 class="text-5xl md:text-7xl font-serif leading-tight mb-6">

            <span class="text-[#2d1f0e]">
                Descubre el mundo
            </span>

            <br>

            <span class="bg-gradient-to-r from-[#c24e30] to-[#2e6b2e] bg-clip-text text-transparent">
                de la animación
            </span>

        </h1>

        
        <p class="max-w-2xl mx-auto text-[#5f5143] text-lg leading-relaxed mb-10">
            Explora películas legendarias, personajes icónicos y compite en
            trivias mágicas dentro del mayor catálogo de cine animado del mundo.
        </p>

        
        <div class="max-w-2xl mx-auto mb-10">

            <div class="flex items-center bg-[#f0e6cc] rounded-full px-6 py-4 border border-[#c24e30]/20 shadow-lg">

                <span class="text-[#c24e30] mr-3 text-xl">⌕</span>

                <input
                    type="text"
                    placeholder="Busca por título, estudio, país o género..."
                    class="bg-transparent w-full outline-none text-[#2d1f0e] placeholder:text-[#8a7a66]"
                >

            </div>

        </div>

        
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 mb-14">

            <a href="<?php echo e(url('/catalogo')); ?>"
               class="px-8 py-4 rounded-full bg-[#c24e30] text-white text-lg shadow-xl hover:scale-105 transition">

                Explorar catálogo

            </a>

            <a href="<?php echo e(url('/trivia')); ?>"
               class="px-8 py-4 rounded-full border border-[#2d1f0e]/20 text-[#2d1f0e] text-lg hover:bg-[#f0e6cc] transition">

                Jugar trivia →

            </a>

        </div>

        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">

            <div>
                <div class="text-4xl font-serif text-[#c24e30] mb-2">1,240+</div>
                <div class="text-[#5f5143] text-sm uppercase tracking-wider">
                    Películas
                </div>
            </div>

            <div>
                <div class="text-4xl font-serif text-[#c24e30] mb-2">34</div>
                <div class="text-[#5f5143] text-sm uppercase tracking-wider">
                    Países
                </div>
            </div>

            <div>
                <div class="text-4xl font-serif text-[#c24e30] mb-2">8,900</div>
                <div class="text-[#5f5143] text-sm uppercase tracking-wider">
                    Fans
                </div>
            </div>

            <div>
                <div class="text-4xl font-serif text-[#c24e30] mb-2">52K</div>
                <div class="text-[#5f5143] text-sm uppercase tracking-wider">
                    Reseñas
                </div>
            </div>

        </div>

    </div>

</section>


<section class="py-24 bg-[#f0e6cc]">

    <div class="max-w-7xl mx-auto px-6">

        
        <div class="mb-14">

            <p class="text-[#c24e30] uppercase tracking-[0.3em] text-sm mb-4">
                // Catálogo
            </p>

            <h2 class="text-5xl font-serif text-[#2d1f0e]">
                Películas destacadas
            </h2>

        </div>

        
        <div id="movies-grid"
             class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        </div>

    </div>

</section>


<section class="py-24 bg-[#fdfaf4]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center mb-14">

            <div>

                <p class="text-[#c24e30] uppercase tracking-[0.3em] text-sm mb-4">
                    // Personajes
                </p>

                <h2 class="text-5xl font-serif text-[#2d1f0e]">
                    Personajes icónicos
                </h2>

            </div>

            <a href="<?php echo e(url('/personajes')); ?>"
               class="text-[#c24e30] hover:underline">
                Ver todos →
            </a>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

            <?php for($i = 0; $i < 10; $i++): ?>

                <div class="bg-white rounded-3xl p-6 border border-[#c24e30]/20 hover:-translate-y-2 transition shadow-lg text-center">

                    <div class="w-24 h-24 rounded-full bg-gradient-to-br from-[#c24e30] to-[#2e6b2e] flex items-center justify-center text-4xl mx-auto mb-4">
                        🎭
                    </div>

                    <h3 class="font-serif text-xl text-[#2d1f0e] mb-2">
                        Personaje
                    </h3>

                    <p class="text-sm text-[#6d5b4d] italic">
                        Película Legendaria
                    </p>

                </div>

            <?php endfor; ?>

        </div>

    </div>

</section>


<section class="py-24 bg-[#f0e6cc]">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-12">

            
            <div class="bg-[#fdfaf4] rounded-[30px] p-10 border border-[#c24e30]/20 shadow-xl">

                <div class="flex justify-between items-center mb-6">

                    <span class="text-[#5f5143] italic">
                        Pregunta 3 de 10
                    </span>

                    <span class="bg-[#c24e30] text-white px-4 py-1 rounded-full text-sm">
                        +150 pts
                    </span>

                </div>

                <h3 class="font-serif text-3xl text-[#2d1f0e] mb-8 leading-relaxed">
                    ¿Qué estudio creó “Spirited Away”?
                </h3>

                <div class="space-y-4">

                    <?php $__currentLoopData = ['Pixar', 'Studio Ghibli', 'DreamWorks', 'Mappa']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <button class="w-full text-left px-6 py-4 rounded-2xl border border-[#c24e30]/20 hover:bg-[#f0e6cc] transition">

                            <?php echo e($option); ?>


                        </button>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>

            
            <div class="bg-[#fdfaf4] rounded-[30px] p-10 border border-[#c24e30]/20 shadow-xl">

                <h3 class="font-serif text-3xl text-[#2d1f0e] mb-8">
                    🏆 Clasificación
                </h3>

                <div class="space-y-5">

                    <?php for($i = 1; $i <= 5; $i++): ?>

                        <div class="flex items-center justify-between border-b border-[#e7d9bc] pb-4">

                            <div class="flex items-center gap-4">

                                <div class="w-10 h-10 rounded-full bg-[#c24e30]/10 flex items-center justify-center">
                                    🎖
                                </div>

                                <div>

                                    <div class="font-serif text-lg">
                                        Fan #<?php echo e($i); ?>

                                    </div>

                                    <div class="text-sm text-[#6d5b4d]">
                                        España
                                    </div>

                                </div>

                            </div>

                            <div class="text-[#c24e30] font-serif text-xl">
                                <?php echo e(rand(1000, 5000)); ?>

                            </div>

                        </div>

                    <?php endfor; ?>

                </div>

            </div>

        </div>

    </div>

</section>


<script>

async function loadMovies() {

    try {

        const response = await fetch('/AniFans/public/api/movies');

        const movies = await response.json();

        const grid = document.getElementById('movies-grid');

        grid.innerHTML = '';

        movies.forEach(movie => {

            grid.innerHTML += `

                <div class="bg-[#fdfaf4] rounded-[24px] overflow-hidden shadow-xl border border-[#c24e30]/10 hover:-translate-y-2 transition duration-300">

                    <div class="h-80 bg-gradient-to-br from-[#c24e30]/20 to-[#2e6b2e]/20 flex items-center justify-center text-7xl">
                        🎬
                    </div>

                    <div class="p-6">

                        <h3 class="font-serif text-2xl text-[#2d1f0e] mb-2">
                            ${movie.title}
                        </h3>

                        <p class="text-sm text-[#6d5b4d] mb-4">
                            ${movie.year} · ${movie.studio}
                        </p>

                        <div class="flex justify-between items-center">

                            <span class="bg-[#2e6b2e]/10 text-[#2e6b2e] px-3 py-1 rounded-full text-sm">
                                ★ ${movie.rating}
                            </span>

                            <button class="text-[#c24e30] hover:scale-110 transition">
                                ♥
                            </button>

                        </div>

                    </div>

                </div>

            `;

        });

    } catch(error) {

        console.error(error);

    }

}

loadMovies();

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\DAWBEVERLY\UniServerZ\www\AniFans\resources\views/pages/home.blade.php ENDPATH**/ ?>