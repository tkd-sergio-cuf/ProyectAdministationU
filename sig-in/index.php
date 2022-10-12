<?php

session_start();

if(isset($_SESSION['usuario'])){
    header('Location: ../content/index.php');
}

$errores = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $usuario = strtolower($_POST['usuario']);
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
            //$constraseña = hash('sha512',$contraseña);
        }else{
            $errores .= 'Por favor ingrese su contraseña </br>';
        }

        if($errores == ''){
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=ProyectoU', 'root','samc2003');
            }catch (PDOException $e) {
                echo "Error:" . $e->getMessage();;
            }

            $statement = $conexion->prepare('SELECT * FROM usuarios WHERE username = :usu AND contraseña = :contra');
            $statement->execute(array(':usu' => $usuario, ':contra' => $contraseña));
                
            $resultado = $statement->fetch();

            if($resultado == false){

               $errores .= 'tienes el usuario o la contraseña mal </br>';
            
            }else{
                
                $_SESSION['usuario'] = $usuario;
                header('Location: ../content/index.php');
            }

        }

}


require "views/index-view.php";

?>
