<?php
    $inicio = false;
    $logo = false;
    include 'src/includes/templates/header.php';
?>

    <main class="contenedor seccion">

        <h1>Contacto</h1>

        <img src="/build/img/imagenPrincipal.jpg" alt="">


        <form class="formulario" action="">

        <label for="Nombre">Nombre : </label>
        <input type="text"  placeholder="Ingrese su nombre" id="Nombre">

        <label for="Apellidos">Apellidos : </label>
        <input type="text"  placeholder="Ingrese sus apellidos" id="Apellidos">

        <label for="Email">Email : </label>
        <input type="email"  placeholder="Ingrese su correo" id="Email">

        <label for="Telefono">Telefono : </label>
        <input type="tel"  placeholder="Ingrese su telefono" id="Telefono">

        <label for="Mensaje">Consulta : </label>
        <textarea id="Mensaje" placeholder="Ingrese su consulta" cols="30" rows="5"></textarea>
            <div>
        <input type="submit" value="Enviar" class="boton-amarillo">
    </div>
    </form>
    </main>

    <?php
include 'src/includes/templates/footer.php'
?>