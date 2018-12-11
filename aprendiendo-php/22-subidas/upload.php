<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$temp = $archivo['tmp_name'];
$tipo = $archivo['type'];

if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
    if (!is_dir('imagenes')) {
        mkdir('imagenes', 0777);
    }
    move_uploaded_file($temp, 'imagenes/'.$nombre);
    echo 'Se cargo correctamente';
    
    
} else {
    header("Refresh: 5; URL=index.php");
    echo 'Sube una imagen con formato correcto por favor';
}