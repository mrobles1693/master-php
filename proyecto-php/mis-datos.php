<?php require_once './includes/redireccion.php';?>
<?php require_once './includes/cabecera.php';?>
<?php require_once './includes/lateral.php';?>

<!-- CAJA PRINCIPAL-->
<div id="principal">
    <h1>Mis Datos</h1>
    <?php
    if (isset($_SESSION['completado'])) {
        echo '<div class="alerta alerta-insertado">' . $_SESSION['completado'] . '</div>';
    } else if (isset($_SESSION['error_update'])) {
        echo '<div class="alerta alerta-error">' . $_SESSION['error_update'] . '</div>';
    }
    ?>
        
    <form action="actualizar-usuario.php" method="POST">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>">
            <?php echo isset($_SESSION['errores']['nombre']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']?>">
            <?php echo isset($_SESSION['errores']['apellidos']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?=$_SESSION['usuario']['email']?>">
            <?php echo isset($_SESSION['errores']['email']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            
            <input type="submit" value="Actualizar" name="submit">
        </form>
        <?php isset($_SESSION['clear']) ? borrarErrores(): ''; ?>
</div>

<?php require_once './includes/pie.php';?>