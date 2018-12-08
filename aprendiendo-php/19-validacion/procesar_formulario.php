<?php
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) &&
        !empty($_POST['email']) && !empty($_POST['pass'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    var_dump($_POST);
    $error = 'ok';
    
    if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = 'Nombre erroneo';
    }
    if(!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
        $error = 'Apellido erroneo';
    }
    if (!is_numeric($edad) || !filter_var(($edad), FILTER_VALIDATE_INT)) {
        $error = 'Edad erroneo';
    }
    if (!is_string($email) || !filter_var(($email), FILTER_VALIDATE_EMAIL)) {
        $error = 'Email erroneo';
    }
    if(strlen($pass)<6){
        $error = 'Pass erroneo';
    }   
    
}else{
    $error = 'faltan_datos';
    header("Location:index.php?error=$error");
}
if($error != 'ok'){
    header("Location:index.php?error=$error");
}
?>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <?php if($error=='ok'):?>
        <h1>Datos validos</h1>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <p><?=$pass?></p>
        <?php endif; ?>
    </body>
</html>