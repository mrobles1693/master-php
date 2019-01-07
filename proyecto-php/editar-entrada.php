<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>
<?php require_once './includes/redireccion.php';?>

<!--CAJA PRINCIPAL-->
<?php
$entrada = conseguirEntrada($db, $_GET['id']);
if (!isset($entrada['id'])) {
    header("Location: index.php");
}
?>



<!--FOOTER-->
<?php require_once './includes/pie.php'; ?>