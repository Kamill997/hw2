
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel='stylesheet' href="<?php echo e(asset('css/registration.css')); ?>">
    <?php echo $__env->yieldContent('script'); ?>
</head>
<body>
    <section class="Credenziali">
        <?php echo $__env->yieldContent('content'); ?>
    </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\porting_hw1\resources\views/layouts/auth.blade.php ENDPATH**/ ?>