<h1>Bienvenido a mi web con MVC</h1>

<?php
require_once 'controllers/UsuarioController.php';
require_once 'controllers/NotaController.php';

if (isset($_GET['controller']) && class_exists($_GET['controller'].'Controller')) {

    $nombre_controlador = $_GET['controller'] . 'Controller';
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo 'El metodo que buscas no existe';
    }
    
} else {
    echo "No existe ese controlador";
}