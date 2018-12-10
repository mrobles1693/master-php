<?php

if (!is_dir('micarpeta')) {
    mkdir('micarpeta', 0777) or die('No se puede crear la carpeta');
}else{
    echo 'Ya existe la carpeta.<br/>';
}

//rmdir('micarpeta');

if($gestor = opendir('./micarpeta')){
    while (false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
        echo $archivo.'<br/>';
        
        }
    }
}