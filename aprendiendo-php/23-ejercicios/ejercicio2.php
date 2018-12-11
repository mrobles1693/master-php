<?php

function validarmail($mail) {
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return 'Email ingresado correctamente';
    } else {
        return 'Error en el formato';
    }
}

if (isset($_GET['email'])) {
    echo validarmail($_GET['email']);
}

?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validar Email</title>
    </head>
    <body>
        <form method="GET" action="<?php $_SERVER['PHP_SELF']; ?>">
            Email: <input type="text" name="email">
            <input type="submit" value="ENVIAR">
        </form>
    </body>
</html>
