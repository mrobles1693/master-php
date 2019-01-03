<?php require_once './includes/cabecera.php';?>

            <!-- BARRA LATERAL -->
            <?php require_once './includes/lateral.php';?>

            <!--CAJA PRINCIPAL-->
            <div id="principal">
                <h1>Todas las Entradas</h1>
                
                <?php
                    $entradas = conseguirEntradas($db);
                    if(!empty($entradas)):
                        while ($entrada = mysqli_fetch_assoc($entradas)):
                ?>
                
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?= $entrada['titulo']?></h2>
                        <span class="fecha"><?= $entrada['categoria']." | ".$entrada['fecha'] ?></span>
                        <p>
                            <?= substr($entrada['descripcion'],0,100).'...'?>
                        </p>
                    </a>
                </article>
                
                    <?php endwhile;?>
                <?php endif;?>

            </div>
<!--FOOTER-->
<?php require_once './includes/pie.php';?>