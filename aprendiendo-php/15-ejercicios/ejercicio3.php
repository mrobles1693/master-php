<?php

$texto = "";

if(empty($texto)){
    $texto = "ya no estoy vacia";
    $texto = strtoupper($texto);
    
    echo "<strong>$texto</strong>";
}

?>