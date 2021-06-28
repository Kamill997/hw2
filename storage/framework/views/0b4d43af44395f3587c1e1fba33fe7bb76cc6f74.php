<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/success-error.css')); ?>">
<script src="<?php echo e(asset('scripts/success.js')); ?>" defer></script>
<title>Pagamento Effettuato</title>
</head>

<body>
    <div class="Pagamento">
        <img src=img/Failed.png>
         <?php if(!empty($message)): ?>
        <h1><?php echo e($message); ?></h1>
        <?php endif; ?>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/failed.blade.php ENDPATH**/ ?>