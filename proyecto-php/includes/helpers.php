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
}