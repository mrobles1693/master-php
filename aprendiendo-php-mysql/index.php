<?php

// Conectar a la Base de Datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

//comprobar conexion correcta
if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos ha fallado: " . mysqli_connect_error();
} else {
    echo "Conexion realizada correctamente.<br>";
}

// Consulta configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    //var_dump($nota);
    echo $nota['titulo'].'<br>';
    echo $nota['descripcion'].'<br>';
}

//Insertar en la base de datos
/*$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP', 'Green')";
$insert = mysqli_query($conexion, $sql);*/

if($insert){
    echo "DATOS INSERTADOS";
}else{
    echo "Error: ". mysqli_error($conexion);
}