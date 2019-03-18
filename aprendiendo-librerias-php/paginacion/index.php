<?php

require_once '../vendor/autoload.php';

$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8'");

$consulta = $conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;

// Hacer Paginacion
$pagination = new Zebra_Pagination();

// Total de Elementos a Paginar
$pagination->records($numero_elementos);

// Elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page = $pagination->get_page();

$empieza_aqui = ($page-1)*$numero_elementos_pagina;
$sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while ($nota = $notas->fetch_object()){
    echo "<h1>{$nota->id}</h1>";
    echo "<h2>{$nota->titulo}</h2>";
    echo "<h3>{$nota->descripcion}</h3>";
}

$pagination->render();