<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /');
}

//IMPORTAR CONEXION

require __DIR__ .  '/src/includes/config/database.php';
$db = conectarDB();

//CONSULTAR

$query = "SELECT * FROM  vivero WHERE id= ${id}";


//OBTENER RESULTADO
$resultado  = mysqli_query($db,$query);

if(!$resultado->num_rows){
    header('Location: /');
}

$arbol = mysqli_fetch_assoc($resultado);




    $inicio = false;
    $logo = false;
    include 'src/includes/templates/header.php';

?>

    <main class="contenedor seccion  contenido-centrado">

         <h2><?php echo $arbol['nombre']; ?></h2>
        <img src="/imagenes/<?php echo $arbol['imagen']; ?>" alt="">

        <div  class="resumen-propiedad">
            <p class="fecha">Fecha Sembrado: <?php echo $arbol['fechaSembrado']; ?></p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img src="/build/img/gotaIcono.png" alt="" loading="lazy">
                    <p><?php echo $arbol['agua']; ?></p>
                </li>

                <li>
                    <img src="/build/img/solIcono.png" alt="" loading="lazy">
                    <p><?php echo $arbol['sol']; ?>°</p>
                </li>

                <li>
                    <img src="/build/img/copo.png" alt="" loading="lazy">
                    <p><?php echo $arbol['frio']; ?>°</p>
                </li>
            </ul>

            <p><?php echo $arbol['descripcion']; ?></p>

        </div>

    </main>

<?php
include 'src/includes/templates/footer.php';
mysqli_close($db);
?>