<?php

function app_autoload($class){
    require_once 'clases/'.$class.'.php';
}

spl_autoload_register('app_autoload');