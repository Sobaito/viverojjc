<?php

    require 'src/includes/config/database.php';
    $db = conectarDB();

    //AUTENTICAR USUARIO
    $errores = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){


        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password  = mysqli_real_escape_string($db, $_POST['password']);
        
        if(!$email){
            $errores[] =  "Email no valido";
        }

        if(!$password){
            $errores[] = "Password incorrecta";
        }

        if(empty($errores)){

            $query = "SELECT * FROM usuarios WHERE email='${email}'";
            $resultado = mysqli_query($db, $query);

            if($resultado->num_rows){
                $usuario = mysqli_fetch_assoc($resultado);

                $autentificacion = password_verify($password, $usuario['password']);

                if($autentificacion){

                    session_start();

                    $_SESSION['usuario']  = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /admin');

                }else{
                    $errores[] = "El password es incorrecto";
                }

            }else{
                $errores[] = "El usuario no existe";
            }
        }
    }







    $inicio = false;
    $logo = false;
    include 'src/includes/templates/header.php';
?>

    <main class="contenedor seccion contenido-centrado">

        <h1>Iniciar Sesion</h1>

        <?php foreach ($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error;  ?>
            </div>
        

        <?php endforeach; ?>

        <form method="POST" class="formulario" novalidate >
            <fieldset>
                <legend>Email y Password</legend>

        <label for="email">Email : </label>
        <input type="email" name="email" placeholder="Ingrese su email" id="email">

        <label for="password">Password : </label>
        <input type="password" name="password"  placeholder="Ingrese su password" id="password" >

           
            </fieldset>
        <input type="submit" value="Iniciar Sesion" class="boton-amarillo">
    
    </form>

    </main>

    <?php
include 'src/includes/templates/footer.php'
?>