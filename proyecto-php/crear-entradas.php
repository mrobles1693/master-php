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
        <?php echo isset($_SESSION["errores_entrada"]["titulo"]) ? mostrarError($_SESSION["errores_entrada"], "titulo") : ''?>
        
        <label for="descripcion">Descripción</label>
        <textarea type="text" name="descripcion"></textarea>
        <?php echo isset($_SESSION["errores_entrada"]["descripcion"]) ? mostrarError($_SESSION["errores_entrada"], "descripcion") : ''?>
        
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
        
        <?php echo isset($_SESSION["errores_entrada"]["categoria"]) ? mostrarError($_SESSION["errores_entrada"], "categoria") : ''?>
        
        <input type="submit" value="Guardar">
        <?php if(isset($_SESSION["errores_entrada"])){
            $_SESSION["errores_entrada"] = null;
            unset($_SESSION["errores_entrada"]);
        }
        ?>
    </form>
</div>

<?php require_once './includes/pie.php';?>