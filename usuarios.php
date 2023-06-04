<?php

require 'src/includes/config/database.php';
$db = conectarDB();

//USUARIO Y CONTRASEÑA PARA ENTRAR AL ADMINISTRADOR
$email = "correo@correo.com"; 
$password = "123456789";

//HASHEAR LA CONTRASEÑA
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios (email,password) VALUES ('${email}', '${passwordHash}');";


mysqli_query($db,$query);

?>