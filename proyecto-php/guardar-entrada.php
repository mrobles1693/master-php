<?php

if (isset($_POST)) {

    require_once './includes/conexion.php';

    $nombre = '';
    if (isset($_POST['nombre'])) {
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    }
    
    $errores = array();
    
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_valido = true;
    } else {
        $nombre_valido = FALSE;
        $errores['nombre'] = "El nombre no es valido. ";
    }
    
    if($nombre_valido){
        $sql = "INSERT INTO categorias VALUES (null, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }
}

header("Location: index.php");