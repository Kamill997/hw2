

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/menu.css')); ?>">
<script src="<?php echo e(asset('scripts/showfood.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
                    <div class="Info">  
                      <a href="<?php echo e(route('home')); ?>">Home</a>
                      <a href="<?php echo e(route('contact')); ?>">Contattaci</a>
                      <a href="<?php echo e(route('cart')); ?>">Carrello</a>
                          <div class="Tendina">
                            <button class="Tendina-button"><?php echo e($user->Username); ?></button>
                              <div class="Tendina-content">
                                  <a href="<?php echo e(route('profile')); ?>">Profilo</a>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
            </header>

            <h1 class="Cerca">Ricerca i piatti che desideri:</h1>
           
              <div class="Filtra">
                <input type="text" id="barra" onkeyup="CercaPiatti()" placeholder="Cerca piatto">

              <div>
                <label>Filtra per tipo di cucina
                  <div>
                    <select name="Tipo" id="tipo" onchange="FilterFood()">
                      <option value="Tutti">Tutti</option>
                      <option value="Italiano">Italiano</option>
                      <option value="Messicano">Messicano</option>
                      <option value="Cinese">Cinese</option>
                      <option value="Giapponese">Giapponese</option>
                      <option value="Tedesco">Tedesco</option>
                      <option value="Americano">Americano</option>
                    </select>
                  </div>
                </label>
              </div>

              </div>

            <article id="general"><a name=visita></a>
            
            <div class="errore hidden">
              Elemento già presente
            </div>

            <div class="successo hidden">
              Elemento aggiunto con successo
            </div>
            
            <section class="dishes-grid general-elem" id="elem">


            </section>

          </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/menu.blade.php ENDPATH**/ ?>