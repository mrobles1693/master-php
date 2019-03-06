<h1>Bienvenido a mi web con MVC</h1>

<?php

require_once './controllers/usuario.php';

$controlador = new UsuarioController();

//$controlador->mostrarTodos();
//$controlador->crear();

if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    
    $action = $_GET['action'];
    
    $controlador->$action();
}else{
    echo 'La pagina que buscas no existe';
}