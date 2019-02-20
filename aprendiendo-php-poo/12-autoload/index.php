<?php

require_once './autoload.php';
use clases;

//require_once './clases/usuario.php';
//require_once './clases/categoria.php';
//require_once './clases/entrada.php';

//$usuario = new Usuario();
//echo $usuario->nombre;
//echo $usuario->email;

class Principal{
    
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();
    }
    
}

$principal = new Principal();
var_dump($principal);