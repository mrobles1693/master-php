<?php require_once './includes/redireccion.php';?>
<?php require_once './includes/cabecera.php';?>
<?php require_once './includes/lateral.php';?>

<!-- CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear Entradas</h1>
    
    <p>
        Añade nuevas entradas al blog para que los usuarios puedan 
        leerlas y disfrutar del contenido. 
    </p>
    <br/>
    
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        
        <label for="descripcion">Descripción</label>
        <textarea type="text" name="descripcion"></textarea>
        
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php $categorias = conseguirCategoria($db);
                if(!empty($categorias)):?>
                    <?php while($categoria = mysqli_fetch_assoc($categorias)):?>
                    
                        <option value="<?=$categoria['id']?>">
                            <?=$categoria['nombre']?>                        
                        </option>
                            
                    <?php endwhile;?>
                <?php endif;?>
        </select>
        
        <input type="submit" value="Guardar">
    </form>
</div>

<?php require_once './includes/pie.php';?>