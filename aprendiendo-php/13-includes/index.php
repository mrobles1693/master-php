<?php
/*
 * Con include si jalas una pagina, 
 * va a funcionar asi no exista lo que estás llamando
 */
include './includes/cabecera.php';

?>

<div>
    <h2>Esta es la pagina de inicio</h2>
    <p>Texto de prueba de la pagina de inicio</p>
    
    <?= var_dump($nombre)?>
</div>

<?php
//Con include_once solo te perminte inclui una vez el codigo
include_once './includes/footer.php';
?>
