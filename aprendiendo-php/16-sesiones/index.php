<?php

session_start();

$variable_normal =  "Soy una cadena de texto";

$_SESSION['Variable_Persistente'] = "HOLA SOY UNA VARIABLE DE LA SESSION";

echo $variable_normal.'</br>';
echo $_SESSION['Variable_Persistente'].'</br>';
