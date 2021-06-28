

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
<script src="https://js.stripe.com/v3/"></script>
<script src="<?php echo e(asset('scripts/checkout.js')); ?>" defer></script>
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
<h2 class="check">CHECKOUT</h2>
<div class="flex-wrap2">
    <div class="info-2">
        <div class="Informazione">
            <form id="validate" method="POST" action="<?php echo e(route('checkout')); ?>">
                <?php echo csrf_field(); ?>
                <div class="flex-wrap">
                    <div class="dati">
                        <h3 class="check">DATI DI FATTURAZIONE</h3>
                        <div class="Email <?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label>Email</label>
                            <span>Email non valida</span>
                            <div><input type="text" id="email" name="Email" placeholder="es. andrea@gmail.com" value="<?php echo e(old('Email')); ?>"></div>
                        </div>
                        <div class="Cellulare <?php $__errorArgs = ['Cellulare'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label>Cellulare</label>
                            <span>Numero di telefono non valido</span>
                            <div><input type="text" id="cellulare" name="Cellulare" placeholder="es. 3xx xxxxxxx" value="<?php echo e(old('Cellulare')); ?>"></div>
                        </div>
                        <div class="Indirizzo <?php $__errorArgs = ['Indirizzo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label>Indirizzo</label>
                            <span>Inserisci indirizzo di residenza</span>
                            <div><input type="text" id="indirizzo" name="Indirizzo" placeholder="es. Via Monte Bianco" value="<?php echo e(old('Indirizzo')); ?>"></div>
                        </div>
                        <div class="Provincia <?php $__errorArgs = ['Provincia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"> 
                            <label>Provincia</label>
                            <span>Inserisci la provincia</span>
                            <div><input type="text" id="citta" name="Prov" placeholder="es. CT" value="<?php echo e(old('Provincia')); ?>"></div>
                        </div>
                        <div class="Proprietario <?php $__errorArgs = ['Proprietario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label>Proprietario Carta</label>
                            <span>Inserisci il proprietario della carta</span>
                            <div><input type="text" id="prop" name="Prop" placeholder="es. <?php echo e($user['Nome']); ?> <?php echo e($user['Cognome']); ?>"></div>
                        </div>                       
                        <label>Card
                        <div id="card-element"></div>
                        </label>  
                        <div id="card-errors" role="alert"></div>
                    </div>             
                </div>
                <button id="checkout-button" class="effettua">Effettua ordine</button>
            </form>
        </div>
    </div>
    <div class="info-3">
        <div class="item">
            <h4>CARRELLO</h4>
        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/checkout.blade.php ENDPATH**/ ?>