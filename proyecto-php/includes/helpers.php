<?php

function mostrarError($errores, $campo){
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    
    return $alerta;
}

function borrarErrores(){
    $_SESSION['errores'] = NULL;
    $borrado = session_unset($_SESSION['errores']);
    
    return $borrado;
}