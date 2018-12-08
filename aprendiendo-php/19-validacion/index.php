<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formularios PHP</title>
    </head>
    <?php
    if (!empty($_GET['error'])) {
        $error = $_GET['error'];
        if($error=='faltan_datos') {
            echo "<strong style='color:red'>Debe llenar todos los campos</strong>";
        } else {
            echo "<strong style='color:red'>$error</strong>";        
        }
    }
    ?>

    <h1>Validar Formularios PHP</h1>
    <form method="POST" action="procesar_formulario.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required="required" ><br/>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" required="required" ><br/>

        <label for="Edad">Edad</label>
        <input type="number" name="edad" required="required" ><br/>

        <label for="email">Email</label>
        <input type="email" name="email" required="required"><br/>

        <label for="pass">Pass</label>
        <input type="password" name="pass" required="required" minlength="6"><br/>

        <input type="submit" value="Enviar">
    </form>
</html>