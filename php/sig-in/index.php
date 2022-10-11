<?php

$errores = '';
$enviado = '';


if(isset($_POST['submit'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    if(!empty($usuario)){
        $usuario = trim($usuario);
        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'Por favor ingrese su usuario </br>';
    }

    if(!empty($contraseña)){
        $contraseña = trim($contraseña);
        $contraseña = filter_var($contraseña, FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'Por favor ingrese su contraseña </br>';
    }

}


require "index-view.php";

?>