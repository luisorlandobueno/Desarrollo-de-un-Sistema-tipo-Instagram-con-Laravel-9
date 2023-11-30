<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <title>clone de intagram</title>
</head>
<body class="bg-gray-100">

    <header class="p-5 border-b bg-white shadow">

        <div class="container mx-auto flex justify-between items-center">

            <a href="" class="text-3xl font-black">CLON DE INSTAGRAM</a>

            <nav class="flex gap-2 items-center">

                <a href="">hola:

                    <span class="font-normal"> 

                            luis

                    </span>


                </a>

                <form method="POST"  action="">

                    <button type="submit" class="font-bold uppercase text-gray-600 text-sm" >

                            cerrar sesion
                    </button>
            
            </form>
            </nav>


            <nav class="flex gap-2 items-center">

                <a class="font-bold uppercase text-gray-600 text-sm" href="">login</a>

                <a href="/clondeinstagram/public/crear-cuenta" class="font-bold uppercase text-gray-600 text-sm">crear cuenta</a>

            </nav>

        </div>

    </header>

    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center  text-3xl mb-10">

            <?php echo $__env->yieldContent('titulo'); ?>

        </h2>

        <?php echo $__env->yieldContent('contenido'); ?>




    </main>


    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">

         CLON DE INSTAGRAM - Todos los derechos reservados 

         <?php echo e(now()->year); ?>


    </footer>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\clondeinstagram\resources\views/layouts/app.blade.php ENDPATH**/ ?>