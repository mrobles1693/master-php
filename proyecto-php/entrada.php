<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>

<!--CAJA PRINCIPAL-->
<?php
$entrada = conseguirEntrada($db, $_GET['id']);
if (!isset($entrada['id'])) {
    header("Location: index.php");
}
?>

<div id="principal">                
    <h1><?= $entrada['titulo'] ?></h1>

    <article class="entrada">
        <h2>Autor: <?= $entrada['usuario'] ?></h2>
        <a class="fecha" href="categoria.php?id=<?=$entrada['categoria_id']?>"><?= $entrada['categoria']?></a>
        <h4><?= $entrada['fecha'] ?></h4>
        <p>
            <?= $entrada['descripcion'] ?>
        </p>
    </article>
    
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada['usuario_id']): ?>
    
    <br/>
    <a href="editar-entrada.php?id=<?=$entrada['id']?>" class="boton boton-verde">Editar entrada</a>
    <a href="borrar-entrada.php?id=<?=$entrada['id']?>" class="boton">Eliminar entrada</a>
    
    <?php endif;?>
    
</div>
<!--FOOTER-->
<?php require_once './includes/pie.php'; ?>