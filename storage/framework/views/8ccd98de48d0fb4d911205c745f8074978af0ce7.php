
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel='stylesheet' href="<?php echo e(asset('css/registration.css')); ?>">
    <?php echo $__env->yieldContent('script'); ?>
</head>
<body>
<article class="Contenitore">
    <section class="pick">
    </section>
    
    <section class="Credenziali">
        <?php echo $__env->yieldContent('content'); ?>
    </section>
</article>
</body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/auth.blade.php ENDPATH**/ ?>