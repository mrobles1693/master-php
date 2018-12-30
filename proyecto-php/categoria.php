<?php require_once './includes/cabecera.php'; ?>
<?php require_once './includes/lateral.php'; ?>

<!--CAJA PRINCIPAL-->
<?php
$categoria = conseguirCategoria($db, $_GET['id']);
if (!isset($categoria['id'])) {
    header("Location: index.php");
}
?>

<div id="principal">                
    <h1>Entradas de <?= $categoria['nombre'] ?></h1>

    <?php
    $entradas = conseguirEntradas($db,null,$_GET['id']);
    if (!empty($entradas) && mysqli_num_rows($entradas)>=1):
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>

            <article class="entrada">
                <a href="">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span class="fecha"><?= $entrada['categoria'] . " | " . $entrada['fecha'] ?></span>
                    <p>
                        <?= substr($entrada['descripcion'], 0, 100) . '...' ?>
                    </p>
                </a>
            </article>

        <?php endwhile; ?>
    <?php else:?>
    <br/><div class="alerta"> No hay entradas en esta categoria.</div>
    <?php endif; ?>

</div>
<!--FOOTER-->
<?php require_once './includes/pie.php'; ?>