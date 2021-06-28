<html>
    <head>
        <Title>Foodle</Title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald&family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/contact.css"/>
        <link rel="stylesheet" href="css/checkout.css"/>
        <script src="scripts/cart.js" defer></script>
    </head>

<body>
<header id="Intestazione">
<nav class="Nav">
        <h2 id="Logo">Foodle</h2>
        <ul class="Info">
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('menu')); ?>">Menu</a></li>
            <li><a href="<?php echo e(route('cart')); ?>">Carrello</a></li>
            <li><a href="<?php echo e(route('logout')); ?>" class="Bottone">Logout</a></li>
        </ul>
        <div class="Menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
</nav>
</header>

<h2 class="check">CONTATTACI</h2>
<div class="flex-wrap2">
    <div class="info-2">
        <div class="Informazione">
            <form id="validate" method="POST">
                <?php echo csrf_field(); ?>
                <div class="flex-wrap">
                    <div class="dati">
                        <label>Email</label>
                        <input type="text" id="email" name="email" placeholder="Email">
                        <label>Messaggio</label>
                        <input type="text" id="messaggio" name="messaggio" placeholder="Messaggio" >
                        <input type="hidden" id="utente" name="utente" value="<?php echo e($user['id']); ?>">
                    </div>                   
                </div>
                <input type="submit" value="Effettua ordine" class="effettua">
            </form>
        </div>
    </div>
</div>


<!--<section>

</section>-->
</body>
</html><?php /**PATH C:\xampp\htdocs\porting_hw1\resources\views/contact.blade.php ENDPATH**/ ?>