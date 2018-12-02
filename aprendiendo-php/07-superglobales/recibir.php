<?php

if(isset($_GET['txt_nombre']) || isset($_GET['txt_apellido'])){    
echo $_GET['txt_nombre'].'</br>';
echo $_GET['txt_apellido'].'</br>';
}

if(isset($_GET['txt_edad']) || isset($_POST['txt_genero'])){    
echo $_POST['txt_edad'].'</br>';
echo $_POST['txt_genero'].'</br>';
}

?>