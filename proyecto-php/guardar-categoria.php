<?php

if (isset($_POST)) {

    require_once './includes/conexion.php';

    $nombre = '';
    if (isset($_POST['nombre'])) {
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    }
}