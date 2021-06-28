

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="css/cart.css"/>
<script src="scripts/cart.js" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
        <ul class="Info">
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('menu')); ?>">Menu</a></li>
            <li><a href="<?php echo e(route('logout')); ?>" class="Bottone">Logout</a></li>
        </ul>
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
                <h1>CARRELLO</h1>
                    <div class="cart">
                        <table class="table">
                            <tbody>
                                <tr>
         
                                </tr>
                            </tbody>                          
                        </table>
                    </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porting_hw1\resources\views/cart.blade.php ENDPATH**/ ?>