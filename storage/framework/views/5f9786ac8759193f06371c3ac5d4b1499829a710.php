

<?php $__env->startSection('title', 'Registrati'); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('scripts/registration.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<form class='form' method='post' action="<?php echo e(route('registration')); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
    <h1 class="title">Registrazione</h1>
    <div class="Nomi">
            <div class="Nome <?php $__errorArgs = ['Nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <span>Inserisci Nome</span>
                <div><input type="text" class="login-input" name="Nome" placeholder="Nome" value="<?php echo e(old('Nome')); ?>"></div>
            </div>
            <div class="Cognome <?php $__errorArgs = ['Cognome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <span>Inserisci Cognome</span>
                <div><input type="text" class="login-input" name="Cognome" placeholder="Cognome" value="<?php echo e(old('Cognome')); ?>"></div>
            </div>
        </div>
        <div class="Username <?php $__errorArgs = ['Username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <span><?php $__errorArgs = ['Username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            <div><input type="text" class="login-input" name="Username" placeholder="Username" value="<?php echo e(old('Username')); ?>"></div>
        </div>
        <div class="Email <?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <span><?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            <div><input type="text" class="login-input" name="Email" placeholder="Email" value="<?php echo e(old('Email')); ?>"></div>
        </div>
        <div class="Password <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <span><?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            <div><input type="password" class="login-input" name="Password" placeholder="Password"></div>
        </div>
        <div class="Pic <?php $__errorArgs = ['Pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <span><?php $__errorArgs = ['Pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            <div><input type="file" id="pic" class="login-input" name="Pic" accept='.jpg, .jpeg, image/gif, image/png'></div>
        </div>
        <div class="submit">
            <input type="submit" id="submit" name="submit" value="Registrati">
        </div>
        <p class="link">Hai già un account? <a href="<?php echo e(route('login')); ?>">Login</a></p>
</form>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/registration.blade.php ENDPATH**/ ?>