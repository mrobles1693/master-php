<?php

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
}

function conseguirCategoria($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);
   
    $result = array();
    if($categorias && mysqli_num_rows(($categorias)) >= 1){
        $result = $categorias;
    }
    
    return $result;
}