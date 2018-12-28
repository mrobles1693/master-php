<?php require_once './includes/cabecera.php';?>

            <!-- BARRA LATERAL -->
            <?php require_once './includes/lateral.php';?>

            <!--CAJA PRINCIPAL-->
            <div id="principal">
                <h1>Ultimas Entradas</h1>
                
                <?php
                    $entradas = conseguirUltimasEntradas($db);
                    if(!empty($entradas)):
                        while ($entrada = mysqli_fetch_assoc($entradas)):
                ?>
                
                <article class="entrada">
                    <a href="">
                        <h2><?= $entrada['titulo']?></h2>
                        <span class="fecha"><?= $entrada['categoria']." | ".$entrada['fecha'] ?></span>
                        <p>
                            <?= substr($entrada['descripcion'],0,100).'...'?>
                        </p>
                    </a>
                </article>
                
                    <?php endwhile;?>
                <?php endif;?>
                
                <div id="ver-todas">
                    <a href="entradas.php">Ver todas las entradas</a>
                </div>

            </div>
<!--FOOTER-->
<?php require_once './includes/pie.php';?>