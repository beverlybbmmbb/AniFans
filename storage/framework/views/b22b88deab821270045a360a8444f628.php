

<?php $__env->startSection('content'); ?>

<section class="p-10 bg-pergamino">

<h1 class="font-playfair text-4xl mb-6">Trivia</h1>

<div class="grid grid-cols-2 gap-6">

<div class="bg-crema p-6 rounded-xl">
    <h2 class="font-playfair">Pregunta</h2>

    <button class="block w-full mt-3 p-2 border">A</button>
    <button class="block w-full mt-2 p-2 border">B</button>
</div>

<div class="bg-crema p-6 rounded-xl">
    <h2 class="font-playfair">Ranking</h2>
</div>

</div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\DAWBEVERLY\UniServerZ\www\AniFans\resources\views/pages/trivia.blade.php ENDPATH**/ ?>