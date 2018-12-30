<?php

if(!isset($_SESSION)){
    session_start();
}

function mostrarError($errores, $campo){
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    
    return $alerta;
}

function borrarErrores(){
    $_SESSION['errores'] = NULL;
    $_SESSION['completado'] = NULL;
    unset($_SESSION['errores']);
    unset($_SESSION['completado']);
    unset($_SESSION['error_insert']);
    unset($_SESSION['error_update']);
    unset($_SESSION["errores_entrada"]);
}

function conseguirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);
   
    $result = array();
    if($categorias && mysqli_num_rows(($categorias)) >= 1){
        $result = $categorias;
    }
    
    return $result;
}

function conseguirCategoria($conexion, $id){
    $sql = "SELECT * FROM categorias WHERE id = $id;";
    $categorias = mysqli_query($conexion, $sql);
   
    $result = array();
    if($categorias && mysqli_num_rows(($categorias)) >= 1){
        $result = mysqli_fetch_assoc($categorias);
    }
    
    return $result;
}

function conseguirEntradas($conexion, $limit = NULL, $categoria = null){
    $sql = "SELECT e.*, c.nombre AS categoria FROM entradas e "
            . "INNER JOIN categorias c ON e.categoria_id = c.id ";
    if($categoria){
        $sql .= "WHERE e.categoria_id = $categoria ";        
    }
    
    $sql .= "ORDER BY e.fecha DESC ";
    
    if($limit){
        $sql .= "LIMIT $limit";
    }
    
    $entradas = mysqli_query($conexion, $sql);
    
    $result = array();
    if($entradas && mysqli_num_rows($entradas) >= 1){
        $result = $entradas;
    }
    return $result;
}