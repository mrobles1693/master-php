<?php

// Iniciar la sesión y la conexion a BD
require_once './includes/conexion.php';

//Recoger datos del formulario
if (isset($_POST)) {
    
    // Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consultar credenciales del usuario para comprobar
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        var_dump($usuario);

        //Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);
        if($verify){
            //Utilizar una sesion para guardar los datos del usuario logueado;
            $_SESSION['usuario'] = $usuario;
            
            if(isset($_SESSION['error_login'])){
                unset($_SESSION['error_login']);
            }
            
        }else{            
            //Si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "Clave Incorrecto";
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = "Usuario no existe";
    }
}
//Redirifir al index.php
header('Location: index.php');