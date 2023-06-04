<?php

function estaAutenticado() :bool{

    session_start();
    $autentificacion = $_SESSION['login'];

    if($autentificacion){
        return true;
    }

    return false;

    


}