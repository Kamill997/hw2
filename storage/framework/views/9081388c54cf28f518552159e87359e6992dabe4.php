

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cart.css')); ?>"/>
<script src="<?php echo e(asset('scripts/cart.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
                <div class="Info">
                      <a href="<?php echo e(route('home')); ?>">Home</a>
                      <a href="<?php echo e(route('contact')); ?>">Contattaci</a>
                      <a href="<?php echo e(route('menu')); ?>">Menu</a>
                    <div class="Tendina">
                        <button class="Tendina-button"><?php echo e($user->Username); ?></button>
                        <div class="Tendina-content">
                            <a href="<?php echo e(route('profile')); ?>">Profilo</a>
                            <a href="<?php echo e(route('cart')); ?>">Carrello</a>
                            <a href="<?php echo e(route('logout')); ?>">Logout</a>
                        </div>
                    </div>
                </div>
        <div class="Menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
</nav>
</header>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="item">
        <div class="Contenitore">
            <div class="Contenuto">
            <?php if(count($cart) > 0): ?>
                <h1>CARRELLO</h1>
                    <div class="cart">
                        <table class="table">
                            <tbody>
        
                            </tbody>                          
                        </table>
                    </div>
<?php else: ?>

<?php endif; ?>   
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/cart.blade.php ENDPATH**/ ?>