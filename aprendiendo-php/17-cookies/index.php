<?php

/* Cokkie
 * Fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento
 * del mismo en la web.
 */

// Crear cookie
// setcookie(nombre, valor que solo puede ser texto, caducidad, ruta, dominio)

// Cokie basica
setcookie("micookie", "valor de mi cookie");

// Cokie con expiración
setcookie("micookie2", "valor de mi cookie de 365 días", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las cookies</a>