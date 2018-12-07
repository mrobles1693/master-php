<?php

/* Para mostrar las cookies hay que usar:
 * $_COOKIE <- Variable superglobal, es un
 * array asociativos
 */

if(isset($_COOKIE["micookie"])){
    echo $_COOKIE["micookie"].'</br>';
} else {
    echo "No existe la cookie.</br>";
}

if(isset($_COOKIE["micookie2"])){
    echo $_COOKIE["micookie2"].'</br>';
} else {
    echo "No existe la cookie.</br>";
}
?>

<a href="borrar_cookies.php">Borrar las cookies</a>
<a href="index.php">Crear cookies</a>