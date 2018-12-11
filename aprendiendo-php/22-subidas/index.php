<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir Archivos PHP</title>
    </head>
    <h1>Subir Archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>

    <hr><h1>Listado de imagenes</h1>

    <?php
    $gestor = opendir('./imagenes');
    if ($gestor) {
        while (($image = readdir($gestor)) !== false) {
            if ($image != '.' && $image != '..') {
                echo "<img src='imagenes/$image' width='200px'><br/>";
            }
        }
    }
    ?>
</html>