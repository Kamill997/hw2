

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/contact.css')); ?>"/>
<script src="<?php echo e(asset('scripts/contact.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
                    <div class="Info">
                      <a href="<?php echo e(route('home')); ?>">Home</a>
                      <a href="<?php echo e(route('contact')); ?>">Contattaci</a>
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
<form class="form" method="POST" id="contact">
<?php echo csrf_field(); ?>
  <h2>CONTATTACI</h2>

  <div class="successo-msg">

  </div>

  <div class="errore-msg">

  </div>

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
        <div><input type="text" id="email" name="Email" placeholder="Indicaci a quale email contattarti" value="<?php echo e(old('Email')); ?>"></div>
    </div>
    <div class="Oggetto <?php $__errorArgs = ['Oggetto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <label>Oggetto</label>
        <span>Inserisci la tua richiesta</span>
        <div><input type="text" id="messaggio" name="Messaggio" placeholder="Inserisci qui la tua richiesta"/></div>
    </div>
    <div class="Messaggio <?php $__errorArgs = ['Messaggio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <label>Dettagli Aggiuntivi</label>
        <span>Inserisci Dettagli</span>
        <div><textarea id="dettagli" name="Dettagli" placeholder="Scrivi qui per ulteriori dubbi" rows="3" maxlength="5000"></textarea></div>
    </div>
    <button>Manda Messaggio</button>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/contact.blade.php ENDPATH**/ ?>