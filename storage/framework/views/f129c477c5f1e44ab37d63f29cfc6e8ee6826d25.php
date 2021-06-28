

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
<script src="<?php echo e(asset('scripts/checkout.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
                        <ul class="Info">
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('menu')); ?>">Menu'</a></li>
                            <li><a href="<?php echo e(route('cart')); ?>">I tuoi ordini</a></li>
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
<h2 class="check">CHECKOUT</h2>
<div class="flex-wrap2">
    <div class="info-2">
        <div class="Informazione">
            <form id="validate" method="POST">
                <div class="flex-wrap">
                    <div class="dati">
                        <h3 class="check">DATI DI FATTURAZIONE</h3>
                        <label>Nome</label>
                        <input type="text" id="nome" name="Nome" placeholder="Nome">
                        <label>Cognome</label>
                        <input type="text" id="cognome" name="Cognome" placeholder="Cognome">
                        <label>Email</label>
                        <input type="text" id="email" name="Email" placeholder="Email">
                        <label>Indirizzo</label>
                        <input type="text" id="indirizzo" name="Indirizzo" placeholder="Indirizzo" >
                        <label>Cellulare</label>
                        <input type="text" id="cellulare" name="Cellulare" placeholder="Cellulare" >
                        <input type="hidden" id="tot" name="tot">
                    </div>                   
                </div>
                <input type="submit" value="Effettua ordine" class="effettua">
            </form>
        </div>
    </div>
    <div class="info-3">
        <div class="item">
            <h4>Cart</h4>
        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porting_hw1\resources\views/checkout.blade.php ENDPATH**/ ?>