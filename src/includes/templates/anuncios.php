<?php 

//IMPORTAR CONEXION

require __DIR__ .  '/../config/database.php';
$db = conectarDB();

//CONSULTAR

$query = "SELECT * FROM  vivero LIMIT ${limite}";


//OBTENER RESULTADO
$resultado  = mysqli_query($db,$query);


?>





<div class="contenedor-anuncios">

    <?php while($arbol = mysqli_fetch_assoc($resultado)): ?>

            <div class="anuncio">

                <img src="/imagenes/<?php echo $arbol['imagen']; ?>" alt="manzano">


                <div class="contenido-anuncio">
                    <h3><?php echo $arbol['nombre']; ?></h3>

                    <p class="parraf"><?php echo $arbol['descripcion']; ?></p>
                    <p  class="fecha">Fecha Sembrado<br> <?php echo $arbol['fechaSembrado']; ?></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="/build/img/gotaIcono.png" alt="" loading="lazy">
                            <p><?php echo $arbol['agua'];?></p>
                        </li>

                        <li>
                            <img src="/build/img/solIcono.png" alt="" loading="lazy">
                            <p><?php echo $arbol['sol'];?>°</p>
                        </li>

                        <li>
                            <img src="/build/img/copo.png" alt="" loading="lazy">
                            <p><?php echo $arbol['frio'];?>°</p>
                        </li>
                    </ul>

                    <a href="anuncio.php?id=<?php echo $arbol['id'];?>" class="boton boton-amarillo-block">
                        Ver Arbol
                    </a>

                </div><!--Contenido Anuncio-->
            </div><!--Anuncio-->

        <?php endwhile; ?>    

        </div><!--Contenedor Anuncios-->

<?php 
//CERRAR CONEXION
mysqli_close($db);

?>