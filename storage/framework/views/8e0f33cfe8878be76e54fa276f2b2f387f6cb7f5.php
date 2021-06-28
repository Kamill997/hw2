

<?php $__env->startSection('css-script'); ?>
<link href="<?php echo e(asset('css/profile.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('scripts/profile.js')); ?>" defer></script>
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
<div class="Navlat">
        <div class="profilo">
            <label id="appendi" for="upload">
            <img src="<?php echo e(asset('storage/'.$user->Pic)); ?>">
            </label>
            <div class="errore-msg hidden">

            </div>
            <form id="change" name="change" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>           
                <input type="file" id="upload" name="Upload" accept='.jpg, .jpeg, image/gif, image/png'>
            </form>
            <div class="User">
                <h3><?php echo e($user['Username']); ?></h3>
            </div>
        </div>

        <div class="Navlat-info">
            <div class="sect">
                <a href="<?php echo e(route('profile')); ?>">Profilo</a>
                <hr>
            </div>
        </div>
    </div>

    <div class="Contenuto">
        <h2>RIGUARDO A TE</h2>
        <div class="Informazioni">
            <div class="Informazioni-elem">
                <p>Nome: <?php echo e($user['Nome']); ?></p>
                <p>Cognome: <?php echo e($user['Cognome']); ?></p>
                <p>Email: <?php echo e($user['Email']); ?></p>
            </div>
        </div>

        <h2>RIPRISTINA PASSWORD</h2>
        <div class="Informazioni">
            <div class="Informazioni-elem linea">

                <div class="successo-msg hidden">

                </div>

                <div class="errore-msg hidden">

                </div>

                <form id="reset" name="reset" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="Old-Pass <?php $__errorArgs = ['old_pass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <label>Vecchia Password</label>
                        <div><input type="password" id="old_pass" name="old_pass" placeholder="Inserisci la tua vecchia password"></div>
                    </div>

                    <div class="New-Pass <?php $__errorArgs = ['new_pass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <label>Nuova Password</label>
                        <div><input type="password" id="new_pass" name="new_pass" placeholder="Inserisci la tua nuova password"></div>
                    </div>

                    <div class="Repeat-Pass <?php $__errorArgs = ['repeat_pass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errore <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <label>Ripeti Password</label>
                        <div><input type="password" id="repeat_pass" name="repeat_pass" placeholder="Ripeti la tua password"></div>
                    </div>

                    <div class="submit">
                        <input type="submit" id="submit" name="submit" value="Ripristina">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/profile.blade.php ENDPATH**/ ?>