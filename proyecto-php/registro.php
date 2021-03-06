<?php

if (isset($_POST)) {

    require_once './includes/conexion.php';

    // Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : FALSE;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : FALSE;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : FALSE;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : FALSE;
    
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

    //Contraseña
    if (!empty($password)) {
        $password_valido = true;
    } else {
        $password_valido = false;
        $errores['password'] = "Las password esta vacia";
    }

    $guardar_usuario = false;

    if (count($errores) == 0) {
        $guardar_usuario = true;

        // Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //Insertar usuario
        $sql = "INSERT INTO usuarios VALUES(null,'$nombre',  '$apellidos','$email','$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
              
        if ($guardar) {
            $_SESSION['clear'] = true;
            $_SESSION['completado'] = "El registro se ha completado";
        } else {
            $_SESSION['clear'] = true;
            $_SESSION['error_insert'] = mysqli_error($db);
        }
    } else {
        $_SESSION['clear'] = true;
        $_SESSION['errores'] = $errores;
    }
}

header("Location: index.php");