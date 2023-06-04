<?php

    require '../src/includes/funciones.php';
    $autentificacion = estaAutenticado();
    if(!$autentificacion){
        header('Location: /');
    }

    //IMPORTAR LA CONEXION
    require '../src/includes/config/database.php';
    $db = conectarDB();

    //EL QUERY
    $query = "SELECT * FROM vivero";

    //CONSULTAR BBDD
    $resultadoConsulta = mysqli_query($db, $query);


    $resultado = $_GET['resultado'] ?? null; 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){

            //ELIMINAR EL ARCHIVO
            $query = "SELECT imagen FROM vivero WHERE id=${id};";
            $resultado = mysqli_query($db, $query);
            $arbol = mysqli_fetch_assoc($resultado);

            unlink('../imagenes/' . $arbol['imagen'] );

            $query = "DELETE FROM vivero WHERE id=${id};";
            $resultado = mysqli_query($db, $query);

            if($resultado){
                header('Location: /admin?resultado=3');
            }
        }
    }

    $inicio = false;
    $logo = false;
    include '../src/includes/templates/header.php';
?>

<main class="contenedor seccion">

    <h1>Administrador de Arboles</h1>

    <?php if( intval($resultado) == 1): ?>
        <p class="alerta exito"> Registro creado correctamenete </p>

        <?php elseif(intval($resultado) == 2): ?>

            <p class="alerta exito"> Actualizado correctamenete </p>

        <?php elseif(intval($resultado) == 3): ?>

            <p class="alerta exito"> Eliminado correctamente </p>
    
    <?php endif; ?>    

    <a href="/admin/propiedades/crear.php"  class="boton boton-amarillo">CREAR</a>

    <table class="listar">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Fecha Sembrado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            <?php while($arboles = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <tr>
                <td><?php echo $arboles['id']; ?></td>
                <td><?php echo $arboles['nombre']; ?></td>
                <td><img src="/imagenes/<?php echo $arboles['imagen']; ?>" class="imagen-tabla"></td>
                <td><?php echo $arboles['fechaSembrado']; ?></td>
                <td>
                    <form method="POST" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $arboles['id']; ?>">
                
                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                    </form>
                    
                    <a href= "/admin/propiedades/actualizar.php?id=<?php echo $arboles['id']; ?>"  class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endwhile; ?>

        </tbody>
    </table>


</main>


<?php

//CERRAR CONEXION DB
mysqli_close($db);

include '../src/includes/templates/footer.php'
?>