<?php

if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo $_POST['titulo'].'</br>';
    echo $_POST['descripcion'].'</br>';
}