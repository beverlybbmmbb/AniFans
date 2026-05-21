<nav id="navbar"
    class="fixed top-0 w-full z-50 transition-all duration-300
           bg-[#fdfaf4]/80 backdrop-blur border-b border-[#c24e30]/20">

    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">

        
        <a href="<?php echo e(url('/')); ?>"
           class="text-2xl font-serif text-[#c24e30] tracking-wide">
            AniFans
        </a>

        
        <div class="hidden md:flex gap-6 text-sm font-medium">

            <?php
                $current = request()->path();
            ?>

            <a href="<?php echo e(url('/catalogo')); ?>"
               class="<?php echo e(str_contains($current,'catalogo') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]'); ?>

                      hover:text-[#c24e30] transition pb-1">
                Catálogo
            </a>

            <a href="<?php echo e(url('/personajes')); ?>"
               class="<?php echo e(str_contains($current,'personajes') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]'); ?>

                      hover:text-[#c24e30] transition pb-1">
                Personajes
            </a>

            <a href="<?php echo e(url('/trivia')); ?>"
               class="<?php echo e(str_contains($current,'trivia') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]'); ?>

                      hover:text-[#c24e30] transition pb-1">
                Trivia
            </a>

            <a href="<?php echo e(url('/paises')); ?>"
               class="<?php echo e(str_contains($current,'paises') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]'); ?>

                      hover:text-[#c24e30] transition pb-1">
                Países
            </a>

            <a href="<?php echo e(url('/perfil')); ?>"
               class="<?php echo e(str_contains($current,'perfil') ? 'text-[#c24e30] border-b border-[#c24e30]' : 'text-[#2d1f0e]'); ?>

                      hover:text-[#c24e30] transition pb-1">
                Mi Perfil
            </a>

        </div>

        
        <div class="hidden md:flex gap-3">

            <a href="<?php echo e(url('/login')); ?>"
               class="px-4 py-1 border border-[#c24e30] text-[#c24e30]
                      rounded-full text-sm hover:bg-[#c24e30] hover:text-[#fdfaf4]
                      transition">
                Iniciar sesión
            </a>

            <a href="<?php echo e(url('/register')); ?>"
               class="px-4 py-1 bg-[#c24e30] text-[#fdfaf4]
                      rounded-full text-sm hover:opacity-90 transition">
                Registrarse
            </a>

        </div>

        
        <button id="menuBtn"
            class="md:hidden text-[#c24e30] text-2xl">
            ☰
        </button>

    </div>

    
    <div id="mobileMenu"
         class="hidden md:hidden flex flex-col gap-3 px-6 pb-4 text-sm">

        <a class="text-[#2d1f0e]" href="<?php echo e(url('/catalogo')); ?>">Catálogo</a>
        <a class="text-[#2d1f0e]" href="<?php echo e(url('/personajes')); ?>">Personajes</a>
        <a class="text-[#2d1f0e]" href="<?php echo e(url('/trivia')); ?>">Trivia</a>
        <a class="text-[#2d1f0e]" href="<?php echo e(url('/paises')); ?>">Países</a>
        <a class="text-[#2d1f0e]" href="<?php echo e(url('/perfil')); ?>">Perfil</a>

    </div>
</nav>


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
</script><?php /**PATH C:\DAWBEVERLY\UniServerZ\www\AniFans\resources\views/layouts/nav.blade.php ENDPATH**/ ?>