<?php

if (isset($_POST)) {

    require_once './includes/conexion.php';
    
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
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];
            $sql = "UPDATE entradas SET categoria_id=$categoria, titulo ='$titulo', descripcion ='$descripcion' "
                    . "WHERE id = $entrada_id "
                    . "AND usuario_id = $usuario;";
        }else{
            $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        }
        $guardar = mysqli_query($db, $sql);
        echo mysqli_error($db);
        header("Location: index.php");
    }else{
        $_SESSION['clear'] = true;
        $_SESSION["errores_entrada"] = $errores;
        if(isset($_GET['editar'])){
            header("Location: editar-entrada.php?id=".$_GET['editar']);
        }else{
            header("Location: crear-entradas.php");
        }
    }
}