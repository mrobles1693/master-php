<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);

// Redimensionar
$thumb->resize(150,150);

// Recortar
//$thumb->cropFromCenter(200, 100);

$thumb->show();
$thumb->save($guardar_en);

