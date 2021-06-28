

<?php $__env->startSection('title' ,'Login'); ?>

<?php $__env->startSection('content'); ?>

<form class="form" method="post" name="login">
<?php echo csrf_field(); ?>
        <h1 class="title">Login</h1>
        <div class="username">
          <div><input type="text" class="login-input" name="Username" placeholder="Username"/></div>
        </div>
        <div class="password"> 
          <div><input type="password" class="login-input" name="Password" placeholder="Password"/></div>
        </div>
        <div class="submit">
          <div><input type="submit" value="Login" name="submit"/></div>
        </div>
        <p class="link">Non hai un account? <a href="<?php echo e(route('registration')); ?>">Registrati Adesso</a></p>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porting_hw1\resources\views/login.blade.php ENDPATH**/ ?>