<?php require_once './includes/redireccion.php';?>
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
    <h1>Editar Entradas</h1>
    
    <p>
        Edita tu emtrada <?= $entrada['titulo']?>
    </p>
    <br/>
    
    <form action="guardar-entrada.php?editar=<?=$entrada['id']?>" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?=$entrada['titulo']?>">
        <?php echo isset($_SESSION["errores_entrada"]["titulo"]) ? mostrarError($_SESSION["errores_entrada"], "titulo") : ''?>
        
        <label for="descripcion">Descripción</label>
        <textarea type="text" name="descripcion"><?=$entrada['descripcion']?></textarea>
        <?php echo isset($_SESSION["errores_entrada"]["descripcion"]) ? mostrarError($_SESSION["errores_entrada"], "descripcion") : ''?>
        
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php $categorias = conseguirCategorias($db);
                if(!empty($categorias)):?>
                    <?php while($categoria = mysqli_fetch_assoc($categorias)):?>
                    
                        <option value="<?=$categoria['id']?>" <?=($categoria['id']==$entrada['categoria_id'])? 'selected="selected"' : ''?>  >
                            <?=$categoria['nombre']?>                        
                        </option>
                            
                    <?php endwhile;?>
                <?php endif;?>
        </select>
        
        <?php echo isset($_SESSION["errores_entrada"]["categoria"]) ? mostrarError($_SESSION["errores_entrada"], "categoria") : ''?>
        
        <input type="submit" value="Guardar">
        <?php isset($_SESSION['clear']) ? borrarErrores(): ''; ?>

    </form>
</div>


<!--FOOTER-->
<?php require_once './includes/pie.php'; ?>