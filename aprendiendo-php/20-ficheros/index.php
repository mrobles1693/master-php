<?php

//Abrir Archivo
$archivo = fopen("fichero_texto.txt", "a+");

//Leer c¡Contenido Archivo
while(!feof($archivo)) {
    $contenido = fgets($archivo).'<br/>';

    echo $contenido;
}

//Escribir en Archivo
fwrite($archivo, "Texto Insertado");


//Cerrar Archivo
fclose($archivo);

//Copiar Archivo
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

//rename('fichero_copiado.txt', 'archivo_renombrado.txt');

//unlink('archivo_renombrado.txt') or die('Error al borrar');

if(file_exists('fichero_texto.php')){
    echo "El archivo existe. <br/>";
}else{
    echo "El archivo NO existe. <br/>";
}

?>