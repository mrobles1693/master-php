<?php

if (isset($_POST)) {

    require_once './includes/conexion.php';

    // Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : FALSE;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : FALSE;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : FALSE;
    
    //Array de Errores
    $errores = array();

    // Validar datos antes de guardarlos en la base de datos
    //nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_valido = true;
    } else {
        $nombre_valido = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //apellido
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_valido = true;
    } else {
        $apellidos_valido = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }

    //email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_valido = true;
    } else {
        $email_valido = false;
        $errores['email'] = "Los email no es valido";
    }
    
    //Validar email no repetido
    $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
    $isset_email = mysqli_query($db, $sql);
    $isset_usuario = mysqli_fetch_assoc($isset_email);
    
    
    if(!($isset_usuario['id'] == $_SESSION['usuario']['id'] || empty($isset_usuario))){
        $errores['email'] = "El email esta siendo usado";
    }
    
    if (count($errores) == 0) {
        
        $usuario = $_SESSION['usuario'];
        //Actualizar usuario
        $sql = "UPDATE usuarios SET "
                . "nombre = '$nombre', "
                . "apellidos = '$apellidos', "
                . "email = '$email' "
                . "WHERE id = '".$usuario['id']."'";
        $guardar = mysqli_query($db, $sql);
              
        if ($guardar) {
            $_SESSION['usuario']['nombre'] =  $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            
            $_SESSION['clear'] = true;
            $_SESSION['completado'] = "Se han actualizado con exito los datos.";
            header("Location: mis-datos.php");
        } else {
            $_SESSION['clear'] = true;
            $_SESSION['error_update'] = mysqli_error($db);
            header("Location: mis-datos.php");
        }
    } else {
        $_SESSION['clear'] = true;
        $_SESSION['errores'] = $errores;
        header("Location: mis-datos.php");
    }
}

