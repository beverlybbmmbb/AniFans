<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AniFans</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body class="bg-[#fdfaf4] text-[#2d1f0e] font-[Montserrat]">

    
    <?php echo $__env->make('layouts.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <main class="min-h-screen pt-20">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html><?php /**PATH C:\DAWBEVERLY\UniServerZ\www\AniFans\resources\views/layouts/app.blade.php ENDPATH**/ ?>