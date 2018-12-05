<?php

$nombre = "Mario Robles";
var_dump($nombre);

// Fechas
echo date("d-m-y");
echo '</br>';
echo time();
echo '</br>';

//Matematicas
echo "Raiz cuadrada de 10: ". sqrt(10);
echo '</br>';
echo "Numero Aleatorio: ". rand(10, 40);
echo '</br>';
echo "Pi: ". pi();
echo '</br>';
echo "Redondeo ". round(7.891234);
echo '</br>';
echo "Redondeo con decimales ". round(7.891234, 2);
echo '</br>';

echo gettype($nombre);
echo '</br>';

if(is_string($nombre)){
    echo 'La variable es string';
    echo '</br>';    
}

if(is_float($nombre)){
    echo 'La variable es string';
    echo '</br>';    
} else {
    echo 'La variable no es float';
    echo '</br>';
}

// isset($variable); <- comprueba si existe la variable

if(isset($nombre)){
    echo 'La variable existe';
    echo '</br>';    
}else{
    echo 'La variable no existe';
    echo '</br>';
}

//trim($variable) <-limpiar espacios
$frase = "       contenido       ";
echo var_dump($frase);
echo "Despues del trim";
echo var_dump(trim($frase));

// Eliminar variables / indices
$year = 2020;
echo "Antes del unset: </br>";
echo var_dump($year);
unset($year);
echo "Después del unset: </br>";
echo var_dump($year);

// Comprobar vacia

$texto = true;

if(empty($texto)){
    echo "La variable esta vacia </br>";
} else {
    echo "La variable tiene contenido </br>";
}

//Contar caracteres de un string
$cadena = "123456";

echo strlen($cadena)."</br>";

//Encontrar caracteres
$frase = "La vida es bella";
echo strpos($frase, "es")."</br>";

//Reemplazar contendio dentro de un string
$frase = "La vida es bella";
$frase = str_replace("bella", "dura", $frase);
echo $frase.'</br>';

echo strtoupper($frase).'</br>';