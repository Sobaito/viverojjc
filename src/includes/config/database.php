<?php

function  conectarDB() : mysqli{
    $db =  mysqli_connect('localhost','root','','vivero_bbdd');

    if(!$db){
        echo "No se puedo conectar con la Base de Datos";
        exit;
    }

    return $db;
}