<?php

/* FOR
 * for (variable contador, condicion, actualizando el contador){
 * instruccion;
 * }
 */

$resultado = 0;
for($i = 1; $i <= 100; $i++){
    $resultado += $i;
}

echo '<h2> La suma de los 100 primeros numeros es: '.$resultado.'</h2></br>';

?>