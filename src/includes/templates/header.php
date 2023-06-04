<?php

    if(!isset($_SESSION)){
        session_start();
    }

    $autentificacion = $_SESSION['login'] ?? false;

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viverojc</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>

    <header class="header <?php echo $inicio  ? 'inicio':'' ?>">

        <div class="contenedor contenido-header">

            <div class="barra">

                <?php echo $logo ? '<a href="/">': '<a href="/">' ?>
                    <img src="/build/img/logoPrincipal.png" alt="logotipo empresa">
                </a>
                <nav class="navegacion">
                <?php echo $logo ? '

                    
                        <a href="/nosotros.php">Nosotros</a>
                        <a href="/anuncios.php">Anuncios</a>
                        <a href="/contacto.php">Contacto</a>
                        <?php if($autentificacion):  ?>
                            <a href="/contacto.php">Cerrar Sesion</a>
                        <?php endif; ?>
                   
                ':
                '

               
                        <a href="/nosotros.php">Nosotros</a>
                        <a href="/anuncios.php">Anuncios</a>
                        <a href="/contacto.php">Contacto</a>
                    

                '
                ?>

                        <?php if($autentificacion):  ?>
                            
                            <a href="/cerrar-sesion.php">Cerrar Sesion</a>
                            
                        <?php endif; ?>
                        </nav>

                
            </div><!--cierre de la barra-->

            <?php if($inicio) { ?>
                <h1>¡Haz crecer tus propios frutos! Descubre nuestros árboles frutales</h1>
            <?php } ?>

        </div>

    </header>