<?php

try {
    if (isset($_GET["id"])) {
        echo "El parametro es: {$_GET['id']}</br>";
    } else {
        throw new Exception("Faltan Parametros");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "</br>";
}