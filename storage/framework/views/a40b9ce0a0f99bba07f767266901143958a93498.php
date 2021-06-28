

<?php $__env->startSection('css-script'); ?>
<link rel="stylesheet" href="css/menu.css"/>
<script src="scripts/showfood.js" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
        <ul class="Info">
            <li><a href="<?php echo e(route('home')); ?>">home</a></li>
            <li><a href="<?php echo e(route('cart')); ?>">I tuoi ordini</a></li>
            <li><a href="#Contatta">Contattaci</a></li>
            <li><a href="#visita">Inizia Subito</a></li>
            <li><a href="<?php echo e(route('logout')); ?>" class="Bottone">Logout</a></li>
        </ul>
        <div class="Menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
</nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="Benvenuto">
                    <div class="Scegli">
                      <h2>I migliori ristoranti per ordinare il tuo cibo</h2>
                    
                      <h3>
                        Scegli ciò che più preferisci <?php echo e($user['Username']); ?>

                      </h3>
                
                      <div>
                        <form id="search">
                          <input type = "text" name = "dish" id = "dish" placeholder="Trova qui"><input type ="submit" name="search" value="Trova" id="find">       
                        </form>
                      </div>
                    </div>
                </div>
            </header>

            <h1 class="Cerca">Ricerca i piatti che desideri:</h1>
           
              <div class="Nav">
                <input type="text" id="barra" onkeyup="CercaPiatti()" placeholder="Cerca piatto">
              </div>
       

            <article id="general"><a name=visita></a>
            

            <section class="dishes-grid general-elem" id="elem">


            </section>

          </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.homeview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\porting_hw1\resources\views/menu.blade.php ENDPATH**/ ?>