<?php

    require '../../src/includes/funciones.php';
    $autentificacion = estaAutenticado();
    if(!$autentificacion){
    header('Location: /');
}



    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location:/admin');
    }

    //CONECTAR BASE DE DATOS
    require '../../src/includes/config/database.php';
    $db = conectarDB();
    
    //OBTENER DATOS DE LOS ARBOLES
    $consulta = "SELECT * FROM vivero WHERE id= ${id}";
    $resultado = mysqli_query($db, $consulta);
    $arbol =  mysqli_fetch_assoc($resultado);


    //MENSAJES DE ERROR
    $errores = [];

    $nombre = $arbol['nombre'];
    $fechaSembrado = $arbol['fechaSembrado'];
    $descripcion = $arbol['descripcion'];
    $agua = $arbol['agua'];
    $sol = $arbol['sol'];
    $frio = $arbol['frio'];

    $imagenArbol = $arbol['imagen'];

   


    //TOMA DE VARIABLES
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nombre = $_POST['nombre'];
        $fechaSembrado = $_POST['fechaSembrado'];
        $imagen = $_FILES['imagen'];
        $descripcion = $_POST['descripcion'];
        $agua = $_POST['agua'];
        $sol = $_POST['sol'];
        $frio = $_POST['frio'];

        $imagen = $_FILES['imagen'];

        //CAPTACION DE ERRORES
        if(!$nombre){
            $errores[] = "Debes añadir un nombre";
        }

        if(!$fechaSembrado){
            $errores[] = "Debes añadir una fecha de sembrado";
        }

        if(strlen($descripcion) < 100 && strlen($descripcion) > 400){
            $errores[] = "Debes añadir una descripcion mayor de 100 y menor de 400 caracteres";
        }

        if(!$agua){
            $errores[] = "Debes añadir un numero del 1 al 5";
        }

        if(!$sol){
            $errores[] = "Debes añadir los grados maximos de calor para el arbol";
        }

        if(!$frio){
            $errores[] = "Debes añadir los grados maximo de frio para el  arbol";
        }

      

        //VALIDAR EL TAMAÑO DE LA IMAGEN 1MB
        $medida = 1000 * 1000;

        if($imagen['size'] > $medida){
            $errores[]  = "La imagen es superior a 100 Kb";
        }

        //REVISAR QUE LO ERRORES ESTE VACIO PARA GUARDAR EN LA BBDD
        if(empty($errores)){

            //CREAR CARPETA
            $carpetaImagenes = '../../imagenes';

            if(!is_dir($carpetaImagenes)){
                mkdir($carpetaImagenes);

            }

            $nombreImagen = '';



            //SUBIDA DE ARCHIVOS
            if($imagen['name']){
                unlink($carpetaImagenes ."/". $arbol['imagen']);//ELIMINA LA IMAGEN DE LA CARPETA

                //GENERAR UN NOMBRE UNICO PARA LA IMMAGEN
            $nombreImagen = md5(uniqid(rand(),true)).".jpg";

            //SUBIR LA IMAGEN
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes. "/". $nombreImagen);

            }else{
                $nombreImagen = $arbol['imagen'];
            }

 

            
           


            //INSERTAR EN BASE DE DATOS

            $query  = " UPDATE vivero SET nombre = '${nombre}', fechaSembrado = '${fechaSembrado}', imagen= '${nombreImagen}', descripcion = '${descripcion}',
                                            agua = ${agua}, sol = ${sol}, frio = ${frio} WHERE id= ${id} ";

            $resultado = mysqli_query($db,$query);

            if($resultado){
                header('Location:/admin?resultado=2');
                echo "Insertado correctamente";
            }


        }

       

        
    }

    $inicio = false;
    $logo = false;
    include '../../src/includes/templates/header.php';
?>

<main class="contenedor seccion">

    <h1>Actualizar</h1>

    <a href="../" class="boton boton-amarillo">Volver</a>

    <?php foreach($errores as $error):  ?>

        <div class="alerta error">

        <?php echo $error;  ?>

        </div>
        
    <?php endforeach;  ?>   

    <form  method="POST" class="formulario" enctype="multipart/form-data">

        <fieldset>

            <legend>Informacion general</legend>

            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre  del arbol" value= "<?php echo $nombre; ?>" >

            <label for="fechaSembrado">Fecha de Sembrado: </label>
            <input type="date" id="fechaSembrado" name="fechaSembrado" value= "<?php echo $fechaSembrado; ?>">

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <img src="/imagenes/<?php echo $imagenArbol ?>" class="imagen-small" >

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion" cols="30" rows="5" ><?php echo $descripcion; ?></textarea>

        </fieldset>

        <fieldset>

        <legend>Advertencias</legend>

            <label for="riego">Intensidad de Riego 1(Poco riego) al 5(Mucho riego): </label>
            <input type="number" id="riego" name="agua" placeholder="1 al 5" value= "<?php echo $agua; ?>" >

            <label for="calor">Calor maximo: </label>
            <input type="number" id="calor" name="sol" placeholder="maximo calor soportado" value= "<?php echo $sol; ?>" >

            <label for="frio">Frio maximo: </label>
            <input type="number" id="frio" name="frio" placeholder="maximo frio soportado" value= "<?php echo $frio; ?>">

        </fieldset>

        <input type="submit" value="Actualizar Arbol" class="boton boton-amarillo">

    </form>

</main>


<?php
include '../../src/includes/templates/footer.php'
?>