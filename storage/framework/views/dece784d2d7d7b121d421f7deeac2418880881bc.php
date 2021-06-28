

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
<script src="<?php echo e(asset('scripts/index.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
  <?php if(!isset($user)): ?>
                    <ul class="Info">
                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li><a href="#Contatta">Contattaci</a></li>
                        <li><a href="<?php echo e(route('login')); ?>" class="Bottone">Accedi/Registrati</a></li>
                    </ul>
  <?php else: ?>
                    <ul class="Info">
                        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li><a href="#Contatta">Contattaci</a></li>
                        <li><a href="<?php echo e(route('logout')); ?>" class="Bottone">Logout</a></li>
                    </ul>
  <?php endif; ?>
                    <div class="Menu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
              <div class="Benvenuto">
                <div>
                <h2>Perchè non farsi un bel boccone</h2>
                <h3>
                  Ordina ciò che vuoi,quando vuoi e dove vuoi
                </h3>
                <a href="<?php echo e(route('menu')); ?>" class="Bottone">Guarda adesso</a>
              </div>
            </div>
        </header>
            <section id="Centro">
              <h2>Ecco alcuni dei ristoranti più apprezzati dai nostri clienti</h2>
              <div class="Marchi">

              </div>
              <div class="Marchi-2">

              </div>
            </section>
            <section id="Contenitore-flex">
                <div class="Box">
                    <div class="Sinistra">

                    </div>
                    <div class="Destra">
                      <p>
                        <strong><em>The discovery of a new dish does more for the happiness of the human race than the discovery of a star.</em></strong>
                      </p>
                      <p>
                        <em>Anthelme Brillat-Savarin</em>
                      </p>
                    </div>
                </div>
            </section>
            <section id="Fine">
              <h1>GALLERIA</h1>
                <div id="Galleria">
                  <div class="Foto">

                  </div>
                </div>
            </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porting_hw1\resources\views/home.blade.php ENDPATH**/ ?>