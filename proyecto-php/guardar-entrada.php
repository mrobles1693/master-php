<?php

if (isset($_POST)) {

    require_once './includes/conexion.php';
    
    var_dump($_POST);
    
    if (isset($_POST['titulo'])) {
        $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    }
    if (isset($_POST['descripcion'])) {
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    }
    if (isset($_POST['categoria'])) {
        $categoria = (int) $_POST['categoria'];
    }
    
    $usuario = $_SESSION['usuario']['id'];
    
    $errores = array();
    
    if(empty($titulo)){
        $errores['titulo'] = "El titulo no puede estar vacio.";
    }
    if(empty($descripcion)){
        $errores['descripcion'] = "La descripcion no puede estar vacia.";
    }
    if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = "La categoria no es válida.";
    }
    
    if(count($errores)==0){
        $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        header("Location: index.php");
    }else{
        $_SESSION["errores_entrada"] = $errores;
        header("Location: crear-entradas.php");
    }
}